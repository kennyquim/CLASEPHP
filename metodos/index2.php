<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
<div class="d-flex justify-content-center">
        <div class="card mt-5 col-md-5">
            <div class="card-header">
                Formulario
            </div>
            <div class="card-body">
                <?php
              if (isset($_GET["confirm"])){
                if($_GET["confirm"] === "1"){
                    echo '<div class="alert alert-success" role="alert">
                    Usuario Inscrito
                </div>';
                } else {
                    echo '<div class="alert alert-danger" role="alert">
                    No se ha inscrito ningun usuario
                </div>';
                }
              }
                ?>
                <form action="./mostrar.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nombres">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Apellidos">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico">
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Verificar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>