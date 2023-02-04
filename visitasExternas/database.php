<?php
  $server = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'visitas';

  try {
    $conn = mysqli_connect($server,$username,$password) or die ("error".mysqli_error($conn));
    mysqli_select_db($conn,$database);
  }
  catch(PDOException $e) {
    die('Connection Failed: ' . $e->getMessage());
  }
?>
