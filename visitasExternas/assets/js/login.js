const login = () => {
  const btnRef = document.querySelector('#btn-login');
  let correo = document.querySelector('#email-field').value;
  let clave = document.querySelector('#password-field').value;
  btnRef.disabled = true;

  let formData = new FormData();
  formData.append('correo', correo);
  formData.append('clave', clave);

  $.ajax({
    url: 'LoginController.php', 
    type: 'POST',
    data: formData,
    dataType: 'text',
    cache: false,
    processData: false,
    contentType: false,
    success: function(response) {
      //Swal.fire("Ok", `Sesión exitosa`, "success");
      btnRef.disabled = false;
      console.log('pass');
    },
    error: function(err) {
      Swal.fire('Advertencia', `Credenciales ingresadas incorrectas`, 'warning');
      btnRef.disabled = false;
    }
  });
}