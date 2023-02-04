<?php
  require 'variables.php';
  session_start();
  session_unset();
  session_destroy();
  header('Location: '.$var_dir.'/loginadmin.php');
?>
