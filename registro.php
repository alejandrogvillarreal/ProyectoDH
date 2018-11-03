<?php
  include_once("soporte.php");
  require_once("Models/Usuario.php");

  $paises =[
    "AR"=>"Argentina",
    "BO"=>"Bolivia",
    "BR"=>"Brasil",
    "CH"=>"Chile",
    "CO"=>"Colombia",
    "EC"=>"Ecuador",
    "PAR"=>"Paraguay",
    "PER"=>"Peru",
    "URU"=>"Uruguay",
    "VEN"=>"Venezuela"
  ];


  
  
  //VARIABLES
  $nombre = "";
  $apellido = "";
  $email = "";
  $username = "";
  $pais = "";
  $password = "";
  $passwordR = "";
  //$userPhoto = "";

  //existen estos errores:
  // $errores["nombre"],$errores["apellido"],$errores["email"],$errores["username"],$errores["pais"],$errores["password"]
  //$errores["passwordR"]
  $errores = [];

  if ($_POST) {
    $errores = $validator->validarRegistro($_POST, $db);

    if (!isset($errores["nombre"])) {
      $nombre = $_POST["nombre"];
    }
    if (!isset($errores["apellido"])) {
      $apellido = $_POST["apellido"];
    }
    if (!isset($errores["email"])) {
      $email = $_POST["email"];
    }
    if (!isset($errores["username"])) {
      $username = $_POST["username"];
    }
    if (!isset($errores["pais"])) {
      $pais = $_POST["pais"];
    }
    if (!isset($errores["password"])) {
      $password = $_POST["password"];
    }
    if (!isset($errores["passwordR"])) {
      $passwordR = $_POST["passwordR"];
    }
    /*
    if (!isset($errores["userPhoto"])) {
      $userPhoto = $_POST["userPhoto"];
    }
  */

    if (count($errores) == 0) {
      $usuario = new Usuario($_POST["nombre"], $_POST["apellido"], $_POST["email"], $_POST["username"], $_POST["pais"], 
      $_POST["password"]);

      $email = $_POST["email"];

      $usuario->guardarImagen($email);
      $usuario = $db->guardarUsuario($usuario);

      header("Location:perfil.php?email=$email");exit;
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
        <h1 class="text-center">Registro</h1>
        <hr>
      </div>
        <!-- ACA EMPIEZA LA COLUMNA IZQUIERA DE LA PANTALLA (FORM)-->
      <div class="col-md-4 login-sec">
        <form class="login-form" action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <div class="form-row">
            <div class="col">
              <label>Nombre</label>
              <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre" value="<?php echo $nombre; ?>">
              <span> <?php // echo $errorNombre; ?></span>
            </div>
            <div class="col">
              <label>Apellido</label>
              <input type="text" class="form-control" name="apellido" placeholder="Ingrese su apellido" value="<?php echo $apellido; ?>">
              <span> <?php // echo $errorApellido; ?></span>
            </div>
          </div>
        </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col">
                <label>Nombre de Usuario</label>
                <input type="text" class="form-control" name="username" placeholder="Josesito187" value="<?php echo $username; ?>">
                <span> <?php // echo $errorusername; ?></span>
              </div>
              <div class="col">
                <label>Pais de Nacimiento</label>
                <select id="inputState" class="form-control" name="pais" value="<?php echo $pais; ?>">
                  <option>País...</option>
                  <?php foreach ($paises as $key => $pais): ?>
                    <option value="<?php echo $key; ?>"><?php echo $pais; ?></option>
                  <?php endforeach; ?>
                </select>
                <span> <?php // echo $errorPais; ?></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="ejemplo@gmail.com" name="email" value="<?php echo $email; ?>">
            <span> <?php // echo $errorEmail; ?></span>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col">
                <label>Contraseña</label>
                <input type="password" class="form-control" name="password" placeholder="Contraseña">
                <span> <?php // echo $errorContrasena; ?></span>
              </div>
              <div class="col">
                <label>Repetir Contraseña</label>
                <input type="password" class="form-control" name="passwordR" placeholder="Verifique contraseña">
                <span> <?php // echo $errorContrasenaR; ?></span>
              </div>
            </div>
          </div>
          <div class="custom-file form-group">
            <label>Avatar</label>
            <input type="file" class="custom-file-input text-center center-block" id="customFile"  name="userPhoto">
            <label class="custom-file-label text-left" for="customFile">Elegir</label>
            <span> <?php // echo $errorImg; ?></span>
          </div>
          <div class="form-check">
            <label class="form-check-label">
            <input type="checkbox" class="form-check-input">
            <small>Recordarme</small>
            </label>
          </div>
          <div class="form-group">
            <button class="btn btn-success float-right" type="submit">Registrarse</button>
            <button class="btn float-right mr-3" type="reset">Resetear</button>
          </div>
        </form>
        <br>
        <br>
        <div class="etc-login-form">
          <div class="text-center"><p>Ya tenes cuenta? <a href="login.php">Ingresá acá</a></p></div>
        </div>
        <ul class="errores">
        <?php foreach ($errores as $error) : ?>
          <li>
            <?=$error?>
          </li>
        <?php endforeach; ?>
        </ul>
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
              <img class="d-block img-fluid" src="images/carrousel-form-2.jpeg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <div class="banner-text">
                  <h2>Tenemos la mejor ropa</h2>
                  <p>SARASA SARASASARASA SARASA SARASA SARASA SARASASARASASARASA SARASA SARASA SARASA</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/carrousel-form-3.jpeg" alt="First slide">
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
