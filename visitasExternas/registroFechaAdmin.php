<?php
session_start();
require 'variables.php';
$conexion=mysqli_connect('localhost','root','','visitas');


if(isset($_REQUEST['ide'])){
	$idee=$_POST['ide'];
	//print_r($);
	$consulta="UPDATE survey_761363 SET 761363X1X29 = now() WHERE id = '$idee' ";
	$ejecutar=mysqli_query($conexion,$consulta);
	if ($ejecutar) {
		echo '<script> alert("Fecha Ingresada Correctamente")
		</script>';
	
			header('Location: '.$var_dir.'/dashboard.php');
	}else{
		echo '<script> alert("Error")</script>';
	}	
}
?>