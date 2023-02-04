<?php 
header("Content-Type: application/xls");    
	
header("Content-Disposition: attachment; filename=documento_exportado_" .        date('Y:m:d:m:s').".xls");
header("Pragma: no-cache"); 
header("Expires: 0");

require 'variables.php';
$conexion=mysqli_connect('localhost','root','','visitas');
	
	$output = "";
	
	if(ISSET($_POST['export'])){
		$output .="
			<table>
				<thead>
					<tr>
						<th>CI</th>
						<th>Paterno</th>
						<th>Materno</th>
						<th>Nombre</th>
            <th>Tramite</th>
            <th>Observacion</th>
            <th>Nombre</th>
					</tr>
				<tbody>
		";
		
		$query = mysqli_query($conn, "SELECT * FROM `member`") or die(mysqli_errno());
		while($fetch = mysqli_fetch_array($query)){
			
		$output .= "
					<tr>
						<td>".$fetch['mem_id']."</td>
						<td>".$fetch['firstname']."</td>
						<td>".$fetch['lastname']."</td>
						<td>".$fetch['address']."</td>
					</tr>
		";
		}
		
		$output .="
				</tbody>
				
			</table>
		";
		
		echo $output;
	}

?>