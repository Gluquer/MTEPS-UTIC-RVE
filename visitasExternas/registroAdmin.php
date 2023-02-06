<?php
require 'variables.php';
$conexion=mysqli_connect('localhost','root','','visitas');
if($conexion === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
//$tokens = $_REQUEST['tokens'];
$ci =  $_REQUEST['CI'];
$app = $_REQUEST['app'];
$apm =  $_REQUEST['apm'];
$nom =  $_REQUEST['nom'];
$piso =  $_REQUEST['slct1'];
$area =  $_REQUEST['slct2'];
$quien =  $_REQUEST['slct3'];
$tramite = $_REQUEST['slct6'];
$obs = $_REQUEST['slct7'];


echo ('<script> console.log($area1);</script>');


if(isset($_REQUEST['CI'])){
	$idee=$_POST['CI'];

	$consulta="INSERT INTO survey_761363
	(submitdate, 761363X1X2, 761363X1X1APP, 761363X1X1APM, 761363X1X1NOM, 761363X1X9, 761363X1X3, 761363X1X3other, 761363X1X7, 761363X1X6, 761363X1X5, 761363X1X8, 761363X1X10, 761363X1X11, 761363X1X12, 761363X1X13 , 761363X1X14 , 761363X1X15 , 761363X1X16 , 761363X1X17 , 761363X1X19, 761363X1X18 , 761363X1X22 , 761363X1X20 , 761363X1X21 , 761363X1X23 , 761363X1X25 , 761363X1X26 , 761363X1X24 , 761363X1X27 , 761363X1X28 ,
	761363X1X4 , 761363X1X29 ,	761363X1X30, 761363X1X31)
	VALUES ( now(), '".$ci."', '".$app."', '".$apm."', '".$nom."', '".$piso."', '".$area."', NULL, NULL, NULL, NULL, '".$quien."', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL, NULL,
	now(),
	NULL,
	'".$tramite."',
	'".$obs."'
	)";

	$ejecutar=mysqli_query($conexion,$consulta);
	if ($ejecutar) {
		echo '<script> alert("REGRISTRO COMPLETO")
		</script>';
		header('Location: '.$var_dir.'/dashboard.php');
		
		
		
	}else{
		echo '<script> alert("UN DATO INTRODUCIDO INCORRECTO")</script>';
	}
}

/*if(isset($_REQUEST['ide'])){

	$idee=$_POST['ide'];

	//print_r($);
	//$consulta="SELECT 761363X1X2, 761363X1X1APM, 761363X1X1APP, 761363X1X1NOM FROM survey_761363 WHERE id = '$idee' ";

//	$ejecutar=mysqli_query($conexion,$consulta);
  //$registro = mysqli_fetch_row($consulta);


  
//  $row = mysqli_fetch_array($ejecutar, MYSQLI_BOTH);
  //echo '<script> console.log($rows[1]);  </script>';

	if ($ejecutar) {
	
		if (isset($_SESSION['user_id'])) {
			header('Location: '.$var_dir.'/formactual.php');
		}		
	}else{
		echo '<script> alert("Error")</script>';
	}	
}*/
?>