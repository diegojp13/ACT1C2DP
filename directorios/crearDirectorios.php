<?php
  $nombredirectorio = $_POST["nombre"];

mkdir("../directorios/".$_POST["nombre"]);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../assets/bootstrap-4.5.3-dist/css/bootstrap.min.css">

    <title>Creacion de Directorios</title>
  </head>
  <body>
    <div class="container">
        <h1>Creacion de Directorio</h1>

        <div class="row mt-4">
            <div class="col-12">
				<h2>Directorio Creado</h2>
				<a href="../" class="btn btn-dark"> volver</a>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>