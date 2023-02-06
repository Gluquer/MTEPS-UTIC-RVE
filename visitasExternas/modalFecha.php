<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>

	<link rel="stylesheet" href="./css/es.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body id="page-top">

<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Registro de Usuarios</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <form  action="generarPdf.php" method="POST">
                            <input type="date" name="fechaini" id="fechaini" placeholder="Fecha inicio" required class="form-control mr-sm-2"><br />
                            <input type="date" name="fechafin" id="fechafin"  placeholder="Fecha final" required class="form-control mr-sm-2">
                            <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Generar</button>
                            
                            <input type="submit" value="Guardar"class="btn btn-success" 
                               name="registrar">
                            <input type="submit" value="Guardar"class="btn btn-success" 
                               name="registrar">
                               <a href="dashboard.php" class="btn btn-danger">Cancelar</a>
                               
                            </div>
                        

                        </form>
               
</body>
</html> 