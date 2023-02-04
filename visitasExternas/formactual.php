<?php

require 'variables.php';
$conexion=mysqli_connect('localhost','root','','visitas');

if(isset($_REQUEST['ide'])){

	$idee=$_POST['ide'];
  //print_r($idee);
	$consulta="SELECT token, 761363X1X2, 761363X1X1APP, 761363X1X1APM, 761363X1X1NOM FROM survey_761363 WHERE id = '$idee' ";

	$ejecutar=mysqli_query($conexion,$consulta);
  //$registro = mysqli_fetch_row($consulta);
  
  $row = mysqli_fetch_array($ejecutar, MYSQLI_BOTH);
  //echo '<script> console.log($rows[1]);  </script>';

	if ($ejecutar) {
	
		if (isset($_SESSION['user_id'])) {
			header('Location: '.$var_dir.'/formactual.php');
		}
		
		
	}else{
		echo '<script> alert("Error")</script>';
	}	
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>𝙈𝙄𝙉𝙄𝙎𝙏𝙀𝙍𝙄𝙊 𝘿𝙀 𝙏𝙍𝘼𝘽𝘼𝙅𝙊, 𝙀𝙈𝙋𝙇𝙀𝙊 𝙔 𝙋𝙍𝙀𝙑𝙄𝙎𝙄𝙊𝙉 𝙎𝙊𝘾𝙄𝘼L</title>
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
<script src="pisoAreas.js"></script>
</head>
<header>
<section class="cabeza">
  <h1>FORMULARIO DE REGISTRO E. Y S.</h1>
    <div class="conte">
      
    </div>
</section>
</header>
<style type="text/css">
  
  <! ––@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap');––>

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  color: black;
  font-family: 'calibri';
  background-image: url('fondo3.jpg');
  background-size: cover;
  backdrop-filter: blur(10px);

}

header {
  background: url('fondo.jpg');
  height: 350px;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;

  
}

.cabeza {
  max-width: 1000px;
  margin: auto;
  padding: 10px 0;
}

section h1 {
  text-align: center;
  color: white;
  font-family: 'Raleway', sans-serif;
  background: rgb(217, 136, 128);
  padding: 4px 20px;
  border-radius: 30px;
  font-size: 30px;
  margin-top: 10px;
  margin-left: 100px;
}

section h2 {
  margin: 0;
  padding: 0;
  text-align: center;
  color: white;
  font-family: 'Raleway', sans-serif;
  background: rgb(34, 153, 84);
  padding: 4px 20px;
  border-radius: 30px;
  font-size: 20px;
  margin: 10px;
}

.conte {
  text-align: center;
}
/*Formulario */
.form-register {
  width: 500px;
  background: #24303c;
  padding: 30px;
  margin: auto;
  margin-top: 50px;
  border-radius: 4px;
  font-family: 'Raleway', sans-serif;
  color: white;
  box-shadow: 7px 13px 37px #000;
}
.form-register h4 {
  font-size: 22px;
  margin-bottom: 20px;
}
.controls {
  max-width: 100%;
  background: #24303c;
  padding: 10px;
  border-radius: 4px;
  margin-bottom: 16px;
  border: 1px solid #1f53c5;
  font-family: 'calibri';
  font-size: 18px;
  color: white;
}
.form-register .botons {
  width: 100%;
  background: #1f53c5;
  border: none;
  padding: 12px;
  color: white;
  margin: 16px 20px 0px 0px;
  font-size: 16px;
}
.registro {
 
  background: rgb(217, 136, 128);
  border: none;
  color: white;
  width: 100%;
  text-align: center;
  font-family: 'Raleway', sans-serif;
  padding: 4px 20px;
  border-radius: 30px;
  font-size: 20px;
  margin-top: 30px;
  font-weight: bold;
}
#slct1, #slct2, #slct3, #slct4,#slct6{
  max-width: 60%;
  background: #24303c;
  border: 1px solid #1f53c5;
  font-family: 'calibri';
  color: white;
  margin-bottom: 16px;
  padding: 10px;
  font-family: 'calibri';
  font-size: 18px;
}

</style>
<body>
<section class="form-register">
  <table width="475" border="0" align="center" cellpadding="0" cellspacing="5">
    <tr>
      <th width="25%" height="30">&nbsp;</th>
      <h2>REGISTRO DE PERSONAS EXTERNAS</h2>
      <th width="10%">&nbsp;</th>
    </tr>
  <form action="registro.php" method="post">
    <tr>
        <td><input class="controls" name="tokens"  type="hidden" size="30" value="<?php echo $row[0] ?>" /></td>
    </tr>
    <tr>
      <td><strong>CI</strong></td>
      <td><input class="controls" name="CI" type="text" size="30" value="<?php echo intval($row[1]) ?>" /></td>
      
    </tr>
    <tr>
      <td><strong>Apellido Paterno</strong></td>
      <td><input class="controls" name="app" type="text" size="30" value="<?php echo $row[2] ?>"/></td>
      
    </tr>
    <tr>
      <td><strong>Apellido Materno:</strong></td>
      <td><input class="controls" name="apm" type="text" size="30" value ="<?php echo $row[3] ?>" required/></td>
      
    </tr>
    <tr>
      <td><strong>Nombre:</strong></td>
      <td><input class="controls" name="nom" type="text" size="30" value ="<?php echo $row[4] ?>" required/></td>    
    </tr>
 
    <tr>
      <td><strong>
    Piso
  </strong></td>
      <td><select id="slct1" name="slct1" required onchange="populate(this.id,'slct2')" >
    <option>Select..</option>
    <option value="PB">PLANTA BAJA</option>
    <option value="SS">SUB SUELO</option>
    <option value="P1">PISO 1</option>
      <option value="P2">PISO 2</option>
        
  </select></td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td><strong>Area:</strong></td>
      <td><select id="slct2" name="slct2"  required onchange="populated(this.id,'slct3')"></select></td>
     
    </tr>
    <tr>
      <td><strong>Personal:</strong></td>
    <td> <select id="slct3" name="slct3" ></select></td>
      
    </tr>
  
    <tr>
      <td><strong>
    Tipo
  </strong></td>
      <td><select id="slct6" name="slct6">
    <option>Select..</option>
    <option value="TIPO1">TRAMITES</option>
    <option value="TIPO2">PERSONAL DE LIMPIEZA</option>
    <option value="TIPO3">PERSONAL TECNICO AUTORIZADO</option>
          
  </select></td>
      <td>&nbsp;</td>
    </tr>
      
    <tr>
      <td><strong>Observaciones</strong></td>
      <td><input class="controls" name="slct7" type="text" size="30" value=""/></td>
      
    </tr>

    <tr>
            <td><strong>Fecha de ingreso</strong></td>
            <td><label for="meeting-time" id="slct4">
            <input type="datetime-local" id="meeting-time" name="fecha ingreso" id="slct4">
            </label>
          </td>
            <td></td>
          </tr>
        <tr>  
        
        </tr>
   

  </table>
  <input class="registro" type="submit" value="REGISTRO"  onsubmit= "alert('Se registro!')"/>
  </form>
</section>

</body>
</html>



