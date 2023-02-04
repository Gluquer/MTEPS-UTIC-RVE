<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  session_start();
  require 'database.php';
  require 'variables.php';
  
  if (isset($_SESSION['user_id'])) {
    header('Location: '.$var_dir.'/dashboard.php');
  }

  if (!empty($_POST['correo']) && !empty($_POST['clave'])) {
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];

    $query = mysqli_query($conn, "SELECT tid, token, email, firstname, lastname FROM lime_tokens_761363 WHERE email = '$correo' AND token = '$clave'");
    $result = mysqli_num_rows($query);

    if($result > 0) {
      $data = mysqli_fetch_array($query);
      //print_r($data);
      $idDB = $data[0];
      $correoDB = $data[2];
      $claveDB = $data[1];

      if($correoDB == $_POST['correo'] && $claveDB == $_POST['clave']) {
        $_SESSION['user_id'] = $idDB;
        header('Location: '.$var_dir.'/dashboard.php');
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