<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

    <link rel="stylesheet" href="./styles.css">
    <title>Creación de materia</title>
</head>

<body class="color-background">

    <!-- Barra de navegacion-->

    <nav class="navbar navbar-light bg-light">

        <a class="navbar-brand" href="#">
            <img src="./img/Colegio.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
        </a>
        <div class="dropdown">
            <a class="btn btn-ligth dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Estudiantes</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="./index7.html">Ver estudiantes</a>
                <a class="dropdown-item" href="./LMaterias.html">Materias</a>
                <a class="dropdown-item" href="./DDisponibles.html">Archivos</a>
            </div>
        </div>
        <div class="dropdown ml-auto">
            <a class="btn btn-ligth dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Usuario</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Cerrar sesión</a>
            </div>
        </div>

    </nav>

    <!-- Formulario 1 -->
    <div class="d-flex justify-content-center">
        <div class="col-md-5 border p-3 my-4 bg-white ">
            <div class="card">
                <div class="card-header">
                    <?php
                        if (isset($_GET['confirm'])){
                            if ($_GET['confirm'] === "0"){
                                echo '<div class="alert alert-danger" role="alert">Dato no ingresado</div>';
                            }
                            if ($_GET['confirm'] === "1"){
                                echo '<div class="alert alert-success" role="alert">El registro ha sido exitoso</div>';
                            }
                            if ($_GET['confirm'] === "2"){
                                echo '<div class="alert alert-danger" role="alert">Uno o mas campos estan vacios</div>';
                            }
                            if ($_GET['confirm'] === "3"){
                                echo '<div class="alert alert-danger" role="alert">Ya existe el usuario que intenta registrar</div>';
                            }
                        }
                    ?>   
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Creación de Materias</h5>
                        <div class="btn btn-primary btn-sm">
                            <a class="list-group-item list-group-item-action active " id="list-regresar-list"
                                href="./LMaterias.html">Regresar</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-login" role="tabpanel"
                            aria-labelledby="list-login-list">

                        <form action="./config/insertar.php" method="POST">
                            <div class="form-group">
                                <label for="id">Nombre</label>
                                <input required type="text" class="form-control" id="nombre" name="nombre">
                              </div>
                              <button type="submit" class="btn btn-primary">Crear</button>
                            
                        </form>
                        </div>
                               
                    </div>

                </div>
            </div>
        </div>
    </div>



<!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
            crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>