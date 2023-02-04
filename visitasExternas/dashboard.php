<?php
  session_start();
  require 'variables.php';
  require 'database.php';
  
  if(!isset($_SESSION['admin_id'])) {
    header('Location: '.$var_dir.'/loginadmin.php');
  }
  
  header("Content-Type: text/html;charset=utf-8");
  mb_internal_encoding('UTF-8');
  mysqli_set_charset($conn, "utf8");
  mb_http_output('UTF-8');

  $query = mysqli_query(
    $conn,
    "SELECT  t1.id AS ide, t1.761363X1X2 AS CI, t1.761363X1X1APP AS APaterno, t1.761363X1X1APM AS AMaterno, t1.761363X1X1NOM AS Nombre, (SELECT answer AS namesa FROM answer_l10ns AS t2 WHERE(t2.aid = (SELECT aid FROM answers AS ts WHERE( ts.code = t1.761363X1X9) LIMIT 1 )) LIMIT 1) AS PISODIR,
    (SELECT answer AS namesa FROM answer_l10ns AS t2 WHERE(t2.aid = (SELECT aid FROM answers AS ts WHERE( ts.code = t1.761363X1X3 OR ts.code = t1.761363X1X3other OR ts.code = t1.761363X1X7 OR ts.code = t1.761363X1X6 OR ts.code = t1.761363X1X5) LIMIT 1 )) LIMIT 1) AS AREA,
    (SELECT answer AS namesa FROM answer_l10ns AS t2 WHERE(t2.aid = (SELECT aid FROM answers AS ts WHERE( ts.code = t1.761363X1X8 OR ts.code = t1.761363X1X10 OR ts.code = t1.761363X1X11 OR ts.code = t1.761363X1X12 OR ts.code = t1.761363X1X13 OR ts.code = t1.761363X1X14 OR ts.code = t1.761363X1X15 OR ts.code = t1.761363X1X16 OR ts.code = t1.761363X1X17 OR ts.code = t1.761363X1X19 OR ts.code = t1.761363X1X18 OR ts.code = t1.761363X1X22 OR ts.code = t1.761363X1X20 OR ts.code = t1.761363X1X21 OR ts.code = t1.761363X1X23 OR ts.code = t1.761363X1X25 OR ts.code = t1.761363X1X26 OR ts.code = t1.761363X1X24 OR ts.code = t1.761363X1X27 OR ts.code = t1.761363X1X28) LIMIT 1 )) LIMIT 1) AS AQUIEN, t1.761363X1X4 AS FECHAYHORA, t1.761363X1X29 AS HORASALIDA,
    (SELECT answer AS namesa FROM answer_l10ns AS t2 WHERE(t2.aid = (SELECT aid FROM answers AS ts WHERE( ts.code = t1.761363X1X30) LIMIT 1 )) LIMIT 1) AS TRAM,
    (SELECT t1.761363X1X31) as OBS
    FROM survey_761363 AS t1
    WHERE t1.submitdate != '' AND 761363X1X4 < concat(CURDATE(),' 23:59:59') AND 761363X1X4 > concat(CURDATE(),' 00:00:00')
    ORDER BY t1.761363X1X29 ASC, t1.761363X1X4 DESC
    "
  );
  $query2 = mysqli_query(
    $conn,
    "SELECT DISTINCT t1.761363X1X2, t1.id AS IDE, t1.761363X1X2 AS CI, t1.761363X1X1APP AS APaterno, t1.761363X1X1APM AS AMaterno, t1.761363X1X1NOM AS Nombre, (SELECT answer AS namesa FROM answer_l10ns AS t2 WHERE(t2.aid = (SELECT aid FROM answers AS ts WHERE( ts.code = t1.761363X1X9) LIMIT 1 )) LIMIT 1) AS PISODIR,
    (SELECT answer AS namesa FROM answer_l10ns AS t2 WHERE(t2.aid = (SELECT aid FROM answers AS ts WHERE( ts.code = t1.761363X1X3 OR ts.code = t1.761363X1X3other OR ts.code = t1.761363X1X7 OR ts.code = t1.761363X1X6 OR ts.code = t1.761363X1X5) LIMIT 1 )) LIMIT 1) AS AREA,
    (SELECT answer AS namesa FROM answer_l10ns AS t2 WHERE(t2.aid = (SELECT aid FROM answers AS ts WHERE( ts.code = t1.761363X1X8 OR ts.code = t1.761363X1X10 OR ts.code = t1.761363X1X11 OR ts.code = t1.761363X1X12 OR ts.code = t1.761363X1X13 OR ts.code = t1.761363X1X14 OR ts.code = t1.761363X1X15 OR ts.code = t1.761363X1X16 OR ts.code = t1.761363X1X17 OR ts.code = t1.761363X1X19 OR ts.code = t1.761363X1X18 OR ts.code = t1.761363X1X22 OR ts.code = t1.761363X1X20 OR ts.code = t1.761363X1X21 OR ts.code = t1.761363X1X23 OR ts.code = t1.761363X1X25 OR ts.code = t1.761363X1X26 OR ts.code = t1.761363X1X24 OR ts.code = t1.761363X1X27 OR ts.code = t1.761363X1X28) LIMIT 1 )) LIMIT 1) AS AQUIEN, t1.761363X1X4 AS FECHAYHORA, t1.761363X1X29 AS HORASALIDA
    FROM survey_761363 AS t1
    WHERE t1.submitdate != ''
    GROUP BY 761363X1X2
    ORDER BY t1.id DESC
    "
  );

  $uid = $_SESSION['admin_id'];
  $usersQuery = mysqli_query($conn, "SELECT uid, users_name, password, full_name, email FROM users WHERE uid = '$uid'");
  $result = mysqli_num_rows($usersQuery);
  if($result > 0) {
    $userResult = mysqli_fetch_array($usersQuery);
  }
?>

<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/custom.css">
  <script src="./buscador.js"></script>
  <title>Dashboard</title>
</head>
<style type="text/css">
  .tabContainer {
    width: 100%;
    height: 350px;
  }

  .tabContainer .buttonContainer {
    height: 15%;
  }

  .tabContainer .buttonContainer button:hover {
    background-color: #ECF5EF;
  }

  .tabContainer .buttonContainer button {
    width: 10%;
    height: 90%;
    border: none;
    outline: none;
    cursor: pointer;

    font-family: sans-serif;
    font-size: 16px;
    background-color: #ECF5EF;
  }

  .tabContainer .tabPanel {
    height: 50%;
    text-align: center;
    box-sizing: border-box;
    display: none;
  }
</style>
<body>
<?php 
    $data = mysqli_fetch_row($query);
    $data2 = mysqli_fetch_row($query2);
  ?>
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-1">
          <img src="assets/img/header.png" alt="header" class="img-header">
        </div>
      </div>
    
      <div class="row mt-3 mb-3">
        <div class="col-xl-12 col-md-12">
          <div class="card overflow-hidden">
            <div class="card-content">
              <div class="card-body cleartfix">
                <div class="media align-items-center">
                  <div class="media-body">
                    <p id="nombres-email" class="text-bold"><?php echo $userResult[3] ?></p>
                    <p id="correo-email" class="text-bold"><?php echo $userResult[4] ?></p>
                  </div>
                  <div class="align-self-center">
                  <a href="<?php echo ($var_dir.'/logoutadmin.php') ?>" class="btn btn-outline-danger">Salir</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<div class="tabContainer">
    <div class="buttonContainer" style="text-align: center">
        <button onclick="showPanel(0,'#4caf50')">HOY</button>
        <button onclick="showPanel(1,'#4caf50')">BUSQUEDA</button>
    </div>

  <div class="tabPanel">
    <div class="content">
            <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
              <div class="container">
              <div class="container-fluid">
            <form class="d-flex">
            <input class="form-control me-2 light-table-filter" data-table="registros" type="text" 
            placeholder="Introdusca  la busqueda">
            <hr>
            </form>
          </div>
              <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav">
                  <a href="<?php echo ($var_dir_lime.'/index.php/761363') ?>" class="btn btn-outline-primary"
                    target="__blank">Registrar ingreso</a>
                </ul>
              </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="fa fa-bars"></span> Menu
                </button>

                <div class="collapse navbar-collapse" id="ftco-nav">
                </div>
              </div>
            </nav>
          <h4 class="mb-3 text-center">Registro de Personal Externo</h4>

          <div class="table-responsive">

            <table class="table custom-table table-hover registros" id="registros">
              <thead>
                <tr>
                  <!-- <th scope="col">ID</th> -->
                  <th scope="col">CI</th>
                  <th scope="col">Paterno</th>
                  <th scope="col">Materno</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Tramite</th>
                  <th scope="col">Observacion</th>
                  <th scope="col">Piso</th>
                  <th scope="col">Area</th>
                  <th scope="col">A quien</th>
                  <th scope="col">Fecha y Hora</th>
                  <th scope="col">Hora de Salida</th>
                </tr>
              </thead>

              <tbody>
                <?php foreach ($query as $registro) { ?>
                  <tr>
                    <!-- <td>
                      <small class="d-block"><?php echo $registro['ide'] ?> </small>
                    </td> -->
                    <td>
                      <small class="d-block">
                        <?php echo intval($registro['CI']) ?>
                      </small>
                    </td>
                    <td>
                      <small class="d-block"><?php echo $registro['APaterno'] ?> </small>
                    </td>
                    <td>
                      <small class="d-block">
                        <?php echo $registro['AMaterno'] ?>
                      </small>
                    </td>
                    <td>
                      <small class="d-block"><?php echo $registro['Nombre'] ?></small>
                    </td>
                    <td>
                      <small class="d-block">
                        <?php echo $registro['TRAM'] ?>
                      </small>
                    </td>
                    <td>
                      <small class="d-block">
                        <?php echo $registro['OBS'] ?>
                      </small>
                    </td>
                    <td>
                      <small class="d-block">
                        <?php echo $registro['PISODIR'] ?>
                      </small>
                    </td>
                    <td>
                      <small class="d-block"><?php echo $registro['AREA'] ?></small>
                    </td>
                    <td>
                      <small class="d-block">
                        <?php echo $registro['AQUIEN'] ?>
                      </small>
                    </td>
                    <td>
                      <small class="d-block"> <?php echo $registro['FECHAYHORA']; ?> </small>
                    </td>
                    <td>
                      <small class="d-block">
                        <?php echo $registro['HORASALIDA']; ?>
                      </small>
                    </td>
                    <td>
                    <form action='registroFechaAdmin.php' method="POST" accept-charset="utf-8">
                 
                <script languaje=«JavaScript»>
                    function alerta()
                   {
                 var mensaje;
                      var opcion = confirm("Clicka en Aceptar o Cancelar");
                    if (opcion == true) {
                    mensaje = "Has clickado OK";
	                      } else {
        	            mensaje = "Has clickado Cancelar";
                      return false;
                  	}
                    //	document.getElementById("ejemplo").innerHTML = mensaje;
                  }
                  </script>
                
                      <?php if($registro['HORASALIDA']==NULL){
                        ?>
                        <button  onclick="alerta()"class="btn btn-circle btn-outline-primary mr-2" name="ide" event.preventDefault() value="<?= $registro['ide'] ?>" 
                          type="submit" value="Ingresar Fecha">
                          <i class="fa-solid fa-person-walking-arrow-right" ></i>
                          </buttom>
                      <?php 
                      }
                      else{

                      }?>

                      </form>

                    </td>

                    <td>
                    </td>

                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
  </div>
  <div class="tabPanel">
      <div class="content">
        <div class="container">
          <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
            <div class="container">
            <div class="container-fluid">
            <form class="d-flex">
            <input class="form-control me-2 light-table-filter" data-table="registros2" type="text" 
            placeholder="Introdusca  la busqueda">
            <hr>
            </form>
          </div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
              </button>
              <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                  <a href="<?php echo ($var_dir_lime . '/index.php/761363') ?>" class="btn btn-outline-primary"
                    target="__blank">Registrar ingreso</a>
                </ul>
              </div>
            </div>
          </nav>

      
          <h4 class="mb-3 text-center">TODOS LOS REGISTROS</h4>

          <div class="table-responsive">
            <table class="table custom-table table-hover registros2" id="registros2">
              <thead>
                <tr>
                  <!-- <th scope="col">ID</th> -->
                  <th scope="col">CI</th>
                  <th scope="col">Paterno</th>
                  <th scope="col">Materno</th>
                  <th scope="col">Nombre</th>
                </tr>
              </thead>

              <tbody>
                <?php foreach ($query2 as $registro2) { ?>
                  <tr>
                    <!-- <td>
                      <small class="d-block"><?php echo $registro2['ide'] ?> </small>
                    </td> -->
                    <td>
                      <small class="d-block">
                        <?php echo intval($registro2['CI']) ?>
                      </small>
                    </td>
                    <td>
                      <small class="d-block"><?php echo $registro2['APaterno'] ?> </small>
                    </td>
                    <td>
                      <small class="d-block">
                        <?php echo $registro2['AMaterno'] ?>
                      </small>
                    </td>
                    <td>
                      <small class="d-block"><?php echo $registro2['Nombre'] ?></small>
                    </td>

                    <td>
                    <form action='formAdmin.php' method="POST" accept-charset="utf-8">  
                    <button class="btn btn-info" name="IDE" value="<?= $registro2['IDE']?>" type="submit" href="./formAdmin.php"> 
                      Registrar ingreso
                        </buttom>
                     </form> 
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


</div>




  <script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.3.8/purify.min.js" integrity="sha512-M72KfQy4kPuLYC6CeTrN0eA17U1lXEMrr5qEJC/40CLdZGC3HpwPS0esQLqBHnxty2FIcuNdP9EqwSOCLEVJXQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment-with-locales.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.17/sweetalert2.all.js" integrity="sha512-L0pIRrYrKsfCidtpWhWSrrbyAcSfrvMaezfwnNGns7c7MuToIEZRabX+WmZ6+Dzn8ESNsHz7t/k6vF8aM1fVXg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="./assets/js/jquery-3.3.1.min.js"></script>
  <script src="./assets/js/popper.min.js"></script>
  <script src="./assets/js/bootstrap.min.js"></script>
  <script src="./assets/js/app.js"></script>
  <script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>
  <script>
    var tabButtons = document.querySelectorAll(".tabContainer .buttonContainer button");
    var tabPanels = document.querySelectorAll(".tabContainer  .tabPanel");

    function showPanel(panelIndex, colorCode) {
      tabButtons.forEach(function (node) {
        node.style.backgroundColor = "";
        node.style.color = "";
      });
      tabButtons[panelIndex].style.backgroundColor = colorCode;
      tabButtons[panelIndex].style.color = "white";
      tabPanels.forEach(function (node) {
        node.style.display = "none";
      });
      tabPanels[panelIndex].style.display = "block";
    }
    showPanel(0, '#4caf50');
  </script>
</body>
</html>
