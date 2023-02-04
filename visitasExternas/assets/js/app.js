window.jsPDF = window.jspdf.jsPDF;

const capitalizar = (cadena) => {
  let capitalizado = '';
  const nuevaCadena = cadena.toLowerCase().split(' ').map(subcadena => {
    if(subcadena === 'de' || subcadena === 'y' || subcadena === 'la' || subcadena === 'como' || subcadena === 'en' || subcadena === 'a' || subcadena === 'por' || subcadena === 'al' || subcadena === 'el') {
      return subcadena;
    }
    return subcadena.charAt(0).toUpperCase() + subcadena.slice(1);
  });
  nuevaCadena.forEach(cadena => {
    if(cadena === 'de' || cadena === 'y') {

    }
    capitalizado += cadena + ' ';
  });
  return capitalizado;
}


const enviarCertificado = (nombreCompleto, ci, correo, empresa, fecha) => {
  const alerta = Swal.fire({ title: 'Enviando PDF', showConfirmButton: false, html: '<p>Se esta procesando el envio del correo electronico, espere</p>' + '<img src="https://c.tenor.com/On7kvXhzml4AAAAC/loading-gif.gif" style="width: 50px; height: auto;"/>' });

  const doc = new jsPDF({ orientation: 'landscape', unit: 'px', format: 'letter' });
  const dia = new Date(fecha).getDay();
  const mes = moment(new Date(fecha)).locale('es').format('MMMM');
  
  doc.html(`
    <div class="card card-bg" id="certificado" style="height: 458px; width: 638px;">
      <div class="card-body bg" style="position: relative; font-family: Poppins;">
        <img src="assets/img/certificado.jpg" style="height: 457px; width: auto; position: absolute; top: 0; left: 0;">
        <h5 style="position: absolute; top: 50%; left: 20%; font-size: 15px; color: #000; font-family: Poppins san-serif;">${capitalizar(nombreCompleto)}</h5>
        <span style=" position: absolute; top: 56%; left: 36%; font-size: 10px; color: #000; font-family: Poppins san-serif;">${capitalizar(empresa)}</span>
        <span style="position: absolute; top: 68.5%; left: 26%; font-size: 11px; color: #000; font-family: Poppins san-serif;">${dia}</span>
        <span style="position: absolute; top: 68.5%; left: 33%; font-size: 11px; color: #000; font-family: Poppins san-serif;">${mes}</span>
        <img src="assets/img/firma.png" style="height: 75px; width: auto; position: absolute; top: 75%; left: 37%;">
      </div>
    </div>`, 
    {
      x: 0,
      y: 0,
      callback: async (pdf) => {
        let blob = pdf.output('blob');
        let formData = new FormData();
        formData.append('pdf', blob);
        formData.append('correo', correo);
        formData.append('ci', ci);
        formData.append('nombres', nombreCompleto);

        $.ajax({
          url: 'EmailController.php', 
          type: 'POST',
          data: formData,
          dataType: 'text',
          cache: false,
          processData: false,
          contentType: false,
          success: function(response) {
            alerta.then(result => result.dismiss);
            Swal.fire("Envio exitoso", `Se envio el certificado PDF al correo: ${correo}`, "success");
          },
          error: function(err) {
            Swal.fire("Envio fallido", `Se produjo un error al enviar el certificado PDF al correo: ${correo}`, "warning");
          }
        });
      }
    }
  );
}


const generarPDF = (nombreCompleto, ci, correo, empresa, fecha) => {
  Swal.fire({ title: 'Generando PDF', showConfirmButton: false, timer: 2000, html: '<p>Se esta generando el PDF espere</p>' + '<img src="https://c.tenor.com/On7kvXhzml4AAAAC/loading-gif.gif" style="width: 50px; height: auto;"/>' });

  const doc = new jsPDF({ orientation: 'landscape', unit: 'px', format: 'letter' });
  const dia = new Date(fecha).getDay();
  const mes = moment(new Date(fecha)).locale('es').format('MMMM');
  
  doc.html(`
    <div class="card card-bg" id="certificado" style="height: 458px; width: 638px;">
      <div class="card-body bg" style="position: relative; font-family: Poppins;">
        <img src="assets/img/certificado.jpg" style="height: 457px; width: auto; position: absolute; top: 0; left: 0;">
        <h5 style="position: absolute; top: 50%; left: 20%; font-size: 15px; color: #000; font-family: Poppins san-serif;">${capitalizar(nombreCompleto)}</h5>
        <span style=" position: absolute; top: 56%; left: 36%; font-size: 10px; color: #000; font-family: Poppins san-serif;">${capitalizar(empresa)}</span>
        <span style="position: absolute; top: 68.5%; left: 26%; font-size: 11px; color: #000; font-family: Poppins san-serif;">${dia}</span>
        <span style="position: absolute; top: 68.5%; left: 33%; font-size: 11px; color: #000; font-family: Poppins san-serif;">${mes}</span>
        <img src="assets/img/firma.png" style="height: 75px; width: auto; position: absolute; top: 75%; left: 37%;">
      </div>
    </div>`, 
    {
      x: 0,
      y: 0,
      callback: async (pdf) => pdf.save(ci + '.pdf')
    }
  );
}

const busqueda = () => {
  const tablaReferencia = document.getElementById('registros');
  const textoABuscar = document.getElementById('termino-busqueda').value.toLowerCase();

  let total = 0;

  for(let i = 1; i < tablaReferencia.rows.length; i++) {
    if(tablaReferencia.rows[i].classList.contains("noSearch")) {
      continue;
    }

    let found = false;
    const cellsOfRow = tablaReferencia.rows[i].getElementsByTagName('td');

    for(let j = 0; j < cellsOfRow.length && !found; j++) {
      const compareWith = cellsOfRow[j].innerHTML.toLowerCase();
      if(textoABuscar.length == 0 || compareWith.indexOf(textoABuscar) > -1) {
        found = true;
        total++;
      }
    }
    if(found) {
      tablaReferencia.rows[i].style.display = '';
    }
    else {
      tablaReferencia.rows[i].style.display = 'none';
    }
  }

  const lastTR = tablaReferencia.rows[tablaReferencia.rows.length - 1];
  lastTR.classList.remove("hide", "red");

  if(textoABuscar == "") {
    lastTR.classList.add("hide");
  }
}
