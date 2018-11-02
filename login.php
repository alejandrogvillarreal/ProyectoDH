<?php

  //VARIABLES
  $email = "";
  $contrasena = "";
  $nombreUsuario = "";

  $errorEmail = "";
  $errorContrasena = "";
  $errorNombreUsuario = "";


  if($_POST){
    //var_dump($_POST);
    //var_dump($_FILES);

    //le saco los espacios en blanco atras y adelante de los campos
    //sanitizacion de datos

    // En caso de pedir nombreUsuario descomentar esto $nombreUsuario = trim($_POST['nombreUsuario']);
    $email = trim($_POST['userMail']);
    $contrasena = $_POST['userPass'];



    //VALIDACION POR NOMBRE DE USUARIO
    if(!isset($nombreUsuario) ){
        $errorNombreUsuario = "El nombre de usuario es obligatorio.<br>";
    //cantidad de caracteres del nombre de usuario
    }else if( strlen($nombreUsuario) < 4 || strlen($nombreUsuario) > 20){
        $errorNombreUsuario = "El nombre debe ser de al menos 3 caracteres y menor a 20 caracteres.<br>";
    }else if(!ctype_alpha($nombreUsuario)){
        $errorNombreUsuario = "El nombre sólo puede contener letras";
    }



    //VALIDACION POR EMAIL
    if(empty($email)){
        $errorEmail = "El email es obligatorio.<br>";
      //formato del email
    }else if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
        $errorEmail = "Formato de email inválido";
    }



    if(empty($contrasena) || strlen($contrasena) < 5){
      $errorContrasena = "La contraseña es muy corta";
    }
    elseif (strlen($contrasena) > 20) {
      $errorContrasena = "La contraseña es muy larga";
    }



    //si no hay errores, hago algo
    if(empty($errorNombreUsuario) && empty($errorEmail) && empty($errorContrasena)){
        //puedo encriptar la contraseña
        //$contrasena = password_hash($contrasena,PASSWORD_DEFAULT);

        //puedo verificar si la contraseña es la misma que la que ya tengo
        //password_verify($contrasena,$passHasheada);

        //puedo agradecer por completar el formulario de manera valida
        echo "<h1>Registro exitoso</h1>";

        //puedo redirigir a otro lugar del sitio
        header('Location:index.php');
        echo "<h1>Registro exitoso</h1>";

    }
  }

?>
<?php
    require 'head.php';
?>

<body>
    <?php require 'header.php';?>

<section class="login-block">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center">Iniciar Sesion</h1>
        <hr>
      </div>
      <!-- ACA EMPIEZA LA COLUMNA IZQUIERA DE LA PANTALLA (FORM)-->
      <div class="col-md-4 login-sec">


        <form class="login-form" action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="" name="userMail">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="" name="userPass">
          </div>
          <div class="form-check">
            <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="recordarme" value="1">
            <small>Recordarme</small>
            </label>
          </div>
          <button type="submit" class="btn btn-success float-right">Ingresar</button>
        </form>


        <br><br><br>
        <div class="etc-login-form">
          <div class="text-center">Olvidaste tu contraseña? <a href="registro.php">Click Acá</a></div>
          <div class="text-center">Aún no tenes cuenta? <a href="registro.php">Registrate acá</a></div>
        </div>
      </div>
      <!-- ACA TERMINA LA COLUMNA IZQUIERA DE LA PANTALLA (FORM)-->

      <!-- ACA EMPIEZA LA COLUMNA DERECHA DE LA PANTALLA (FOTOS)-->
      <div class="col-md-8 banner-sec">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="images/carrousel-form-1.jpeg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <div class="banner-text">
                  <h2>Tenemos la mejor ropa</h2>
                  <p>SARASA SARASASARASA SARASA SARASA SARASA SARASASARASASARASA SARASA SARASA SARASA</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/carrousel-form-2.jpeg" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                <div class="banner-text">
                  <h2>Tenemos la mejor ropa</h2>
                  <p>SARASA SARASASARASA SARASA SARASA SARASA SARASASARASASARASA SARASA SARASA SARASA</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/carrousel-form-3.jpeg" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
                <div class="banner-text">
                  <h2>Tenemos la mejor ropa</h2>
                  <p>SARASA SARASASARASA SARASA SARASA SARASA SARASASARASASARASA SARASA SARASA SARASA</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ACA TERMINA LA COLUMNA DERECHA DE LA PANTALLA (FOTOS)-->
    </div>
  </div>
</section>

    <?php include 'footer.php'; ?>
</body>
</html>
