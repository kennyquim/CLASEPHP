<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

  <!-- My styles-->
  <link rel="stylesheet" href="./styles.css" />

  <title>Trabajo Vistas</title>
</head>

<body class="color-background">
  <!-- Formulario inicio de seccion -->
  <div>
    <div class="d-flex justify-content-center">
        <div class="col-md-5 border p-5 my-5 bg-white">
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
                    <div class="list-group list-group-horizontal" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-login-list" data-toggle="list" href="#list-login" role="tab" aria-controls="login">Login</a>
                        <a class="list-group-item list-group-item-action" id="list-register-list" data-toggle="list" href="#list-register" role="tab" aria-controls="register">Register</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-login" role="tabpanel" aria-labelledby="list-login-list">
                          <form>
                            <div class="alert alert-danger" role="alert">
                              Por favor, inicie sesión para acceder a esta área
                            </div>
                            <div class="form-group">
                              <label for="email">Correo Electrónico</label>
                              <input required type="email" class="form-control" id="email" aria-describedby="emailHelp">
                              <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie
                                más</small>
                            </div>
                            <div class="form-group">
                              <label for="passwd">Contraseña</label>
                              <input required type="password" class="form-control" id="passwd" aria-describedby="passwdHelp">
                            </div>
                          </form>
                          <button type="submit" class="btn btn-primary">Ingresar</button>
                        </div>

                        
                        <div class="tab-pane fade" id="list-register" role="tabpanel" aria-labelledby="list-register-list">
                          <form action="./config/insertar.php" method="POST">
                            <div class="form-group">
                              <label for="userId">Identificación</label>
                              <input required type="text" class="form-control" id="userId" name="userId">
                            </div>
                            <div class="form-group">
                              <label for="user">Nombres</label>
                              <input required type="text" class="form-control" id="user" name="user">
                            </div>
                            <div class="form-group">
                              <label for="userAp">Apellidos</label>
                              <input required type="text" class="form-control" id="userAp" name="userAp">
                            </div>
                            <div class="form-group">
                              <label for="email">Correo electrónico</label>
                              <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                              <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más</small>
                            </div>
                            <div class="form-group">
                              <label for="passwd">Contraseña</label>
                              <input required type="password" class="form-control" id="passwd" name="passwd">
                            </div>
                            <div class="form-group">
                              <label for="passwdConfirm">Confirmar contraseña</label>
                              <input required type="password" class="form-control" id="passwdConfirm" name="passwdConfirm">
                            </div>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div>
      
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