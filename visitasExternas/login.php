<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  session_start();
  require 'database.php';
  require 'variables.php';
  
  if (isset($_SESSION['user_id'])) {
    header('Location: '.$var_dir.'/RegistroHoy.php');
  }

  if (!empty($_POST['correo']) && !empty($_POST['clave'])) {
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];

    $query = mysqli_query($conn, "SELECT tid, token, email, firstname, lastname FROM tokens_761363 WHERE email = '$correo' AND token = '$clave'");
    $result = mysqli_num_rows($query);
    //$echo (alert("asdasd"));
    if($result > 0) {
      $data = mysqli_fetch_array($query);
      //print_r($data);
      $idDB = $data[0];
      $correoDB = $data[2];
      $claveDB = $data[1];

      if($correoDB == $_POST['correo'] && $claveDB == $_POST['clave']) {
        $_SESSION['user_id'] = $claveDB;
        header('Location: '.$var_dir.'/RegistroHoy.php');
      }
    }
    else {
      $message = 'Credenciales incorrectas en correo o clave';
    }
  }
  else {
    $message = 'Debe completar la información de ambos campos';
  }
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/login.css">
  <title>Inicio de sesión</title>
</head>
<body>
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
          <div class="wrap">
            <div class="img" style="background-image: url(assets/img/header.png);"></div>
            <div class="login-wrap p-4 p-md-5">
              <div class="d-flex">
                <div class="w-100">
                  <h3 class="mb-4">Inicia sesión</h3>
                </div>
              </div>
              <form class="signin-form" autocomplete="off" action="login.php" method="POST">
                <div class="form-group mt-3">
                  <input type="email" class="form-control" required id="email-field" name="correo">
                  <label class="form-control-placeholder" for="email">Correo</label>
                </div>
                <div class="form-group">
                  <input id="password-field" type="password" class="form-control" required name="clave">
                  <label class="form-control-placeholder" for="password-field">Contraseña</label>
                  <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
                <div class="form-group">
                  <button type="submit" class="form-control btn btn-primary rounded submit px-3" id="btn-login">Ingresar</button>
                </div>
              </form>
              <?php if(!empty($message)): ?>
                <p class="text-center text-danger"><?= $message ?></p>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.17/sweetalert2.all.js" integrity="sha512-L0pIRrYrKsfCidtpWhWSrrbyAcSfrvMaezfwnNGns7c7MuToIEZRabX+WmZ6+Dzn8ESNsHz7t/k6vF8aM1fVXg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="./assets/js/jquery-3.3.1.min.js"></script>
  <script>
    (function($) {
      "use strict";

      $(".toggle-password").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
          input.attr("type", "text");
        }
        else {
          input.attr("type", "password");
        }
      });
    })(jQuery);
  </script>
</body>
</html>