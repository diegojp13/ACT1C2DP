<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/bootstrap-4.5.3-dist/css/bootstrap.min.css">

    <title>Creacion de Archivo</title>
  </head>
  <body>
    <div class="container">
        <h1>Crear TXT</h1>

        <div class="row mt-4">
            <div class="col-12">
                 <form method="POST" action="archivos/crearArchivo.php">
                    <div class="form-group">
                      <label for="nombre">Nombre de Archivo</label>
                      <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>

                    <div class="form-group">
                      <label for="contenido">contenido</label>
                      <textarea class="form-control" col="5" id="contenido" name="contenido" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>