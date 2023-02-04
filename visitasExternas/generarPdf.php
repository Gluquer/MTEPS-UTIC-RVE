<?php
include 'plantilla.php';
require 'variables.php';
require 'database.php';
$conexion=mysqli_connect('localhost','root','','visitas');
if($conexion === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
//$tokens = $_REQUEST['tokens'];
$fIni =  $_REQUEST['fechaini'];
$fFin = $_REQUEST['fechafin'];
//print_r($fIni);

$query = mysqli_query(
  $conn,
  "SELECT  t1.id AS ide, t1.761363X1X2 AS CI, t1.761363X1X1APP AS APaterno, t1.761363X1X1APM AS AMaterno, t1.761363X1X1NOM AS Nombre, (SELECT answer AS namesa FROM answer_l10ns AS t2 WHERE(t2.aid = (SELECT aid FROM answers AS ts WHERE( ts.code = t1.761363X1X9) LIMIT 1 )) LIMIT 1) AS PISODIR,
  (SELECT answer AS namesa FROM answer_l10ns AS t2 WHERE(t2.aid = (SELECT aid FROM answers AS ts WHERE( ts.code = t1.761363X1X3 OR ts.code = t1.761363X1X3other OR ts.code = t1.761363X1X7 OR ts.code = t1.761363X1X6 OR ts.code = t1.761363X1X5) LIMIT 1 )) LIMIT 1) AS AREA,
  (SELECT answer AS namesa FROM answer_l10ns AS t2 WHERE(t2.aid = (SELECT aid FROM answers AS ts WHERE( ts.code = t1.761363X1X8 OR ts.code = t1.761363X1X10 OR ts.code = t1.761363X1X11 OR ts.code = t1.761363X1X12 OR ts.code = t1.761363X1X13 OR ts.code = t1.761363X1X14 OR ts.code = t1.761363X1X15 OR ts.code = t1.761363X1X16 OR ts.code = t1.761363X1X17 OR ts.code = t1.761363X1X19 OR ts.code = t1.761363X1X18 OR ts.code = t1.761363X1X22 OR ts.code = t1.761363X1X20 OR ts.code = t1.761363X1X21 OR ts.code = t1.761363X1X23 OR ts.code = t1.761363X1X25 OR ts.code = t1.761363X1X26 OR ts.code = t1.761363X1X24 OR ts.code = t1.761363X1X27 OR ts.code = t1.761363X1X28) LIMIT 1 )) LIMIT 1) AS AQUIEN, t1.761363X1X4 AS FECHAYHORA, t1.761363X1X29 AS HORASALIDA,
  (SELECT answer AS namesa FROM answer_l10ns AS t2 WHERE(t2.aid = (SELECT aid FROM answers AS ts WHERE( ts.code = t1.761363X1X223) LIMIT 1 )) LIMIT 1) AS TRAM,
  (SELECT t1.761363X1X224) as OBS
  FROM survey_761363 AS t1
  WHERE t1.submitdate != '' AND (761363X1X29 < concat('$fFin',' 23:59:59') OR 761363X1X29 = concat('$fFin',' 23:59:59')) AND (761363X1X4 > concat('$fIni' ,' 00:00:00')  OR 761363X1X4 = concat('$fIni', ' 00:00:00'))
  ORDER BY t1.761363X1X29 ASC, t1.761363X1X4 DESC
  "
);

$data = mysqli_fetch_row($query);

$pdf = new PDF('L','mm','Letter');


	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',6);
	$pdf->Cell(15,6,'CI',1,0,'C',1);
	$pdf->Cell(23,6,'PATERNO',1,0,'C',1);
	$pdf->Cell(23,6,'MATERNO',1,0,'C',1);
	$pdf->Cell(23,6,'NOMBRE',1,0,'C',1);
	$pdf->Cell(23,6,'TRAMITE',1,0,'C',1);
	$pdf->Cell(23,6,'OBSERVACION',1,0,'C',1);
  $pdf->Cell(23,6,'PISO',1,0,'C',1);
  $pdf->Cell(30,6,'AREA',1,0,'C',1);
  $pdf->Cell(23,6,'A QUIEN',1,0,'C',1);
  $pdf->Cell(23,6,'FECHA INGRESO',1,0,'C',1);
  $pdf->Cell(23,6,'FECHA SALIDA',1,1,'C',1);

	
	$pdf->SetFont('Arial','',6);
	
	while($row=$query->fetch_assoc())
	{
		$pdf->Cell(15,6,utf8_decode(intval($row['CI'])),1,0,'C');
		$pdf->Cell(23,6,$row['APaterno'],1,0,'C');
		$pdf->Cell(23,6,utf8_decode($row['AMaterno']),1,0,'C');
		$pdf->Cell(23,6,utf8_decode($row['Nombre']),1,0,'C');
    $pdf->Cell(23,6,utf8_decode($row['TRAM']),1,0,'C');
    $pdf->Cell(23,6,utf8_decode($row['OBS']),1,0,'C');
		$pdf->Cell(23,6,utf8_decode($row['PISODIR']),1,0,'C');
    $pdf->Cell(30,6,utf8_decode($row['AREA']),1,0,'C');
    $pdf->Cell(23,6,utf8_decode($row['AQUIEN']),1,0,'C');
    $pdf->Cell(23,6,utf8_decode($row['FECHAYHORA']),1,0,'C');
    $pdf->Cell(23,6,utf8_decode($row['HORASALIDA']),1,1,'C');
    
	}
	$pdf->Output();

?>