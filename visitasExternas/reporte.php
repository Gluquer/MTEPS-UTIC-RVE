<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="generarPdf.php" method="POST" class="form-inline my-2 my-lg-0 sclass">
    <input type="date" name="fechaini" id="fechainc" placeholder="Fecha inicio" required class="form-control mr-sm-2"><br />
    <input type="date" name="fechafin" id="fechafin"  placeholder="Fecha final" required class="form-control mr-sm-2">
    <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Generar</button>
</form>
</body>
</html>