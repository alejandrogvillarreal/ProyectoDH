<?php

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
  $contrasena = "";
  $nombreUsuario = "";
  $pais = "";
  $contrasenaR = "";

  $errorNombre = "";
  $errorApellido = "";
  $errorEmail = "";
  $errorContrasena = "";
  $errorContrasenaR = "";
  $errorNombreUsuario = "";
  $errorPais = "";
  $errorImg = "";


  if($_POST){
    //var_dump($_POST);
    //var_dump($_FILES);

    //le saco los espacios en blanco atras y adelante de los campos
    //sanitizacion de datos

    $nombre = trim($_POST['nombre']); // trim() elimina los espacios en blanco al inicio y al final
    $apellido = trim($_POST['apellido']);
    $nombreUsuario = trim($_POST['nombreUsuario']);
    $email = trim($_POST['userMail']);
    $contrasena = $_POST['userPass'];
    $contrasenaR = $_POST['userPassR'];
    $pais = trim($_POST['userCountry']);


    //nombre vacio
    if(!isset($nombre) ){
        $errorNombre = "El nombre es obligatorio.<br>";
    //cantidad de caracteres del nombre
    }else if( strlen($nombre) < 4 || strlen($nombre) > 30){
        $errorNombre = "El nombre debe ser de al menos 3 caracteres y menor a 30 caracteres.<br>";
    }else if(!ctype_alpha($nombre)){
        $errorNombre = "El nombre sólo puede contener letras";
    }

    //apellido vacio
    if(!isset($apellido) ){
        $errorApellido = "El apellido es obligatorio.<br>";
    //cantidad de caracteres del apellido
    }else if( strlen($apellido) < 4 || strlen($apellido) > 30){
        $errorApellido = "El apellido debe ser de al menos 3 caracteres y menor a 30 caracteres.<br>";
    }else if(!ctype_alpha($apellido)){
        $errorApellido = "El apellido sólo puede contener letras";
    }



    //
    if(!isset($nombreUsuario) ){
        $errorNombreUsuario = "El nombre de usuario es obligatorio.<br>";
    //cantidad de caracteres del nombre de usuario
    }else if( strlen($nombreUsuario) < 4 || strlen($nombreUsuario) > 20){
        $errorNombreUsuario = "El nombre debe ser de al menos 3 caracteres y menor a 20 caracteres.<br>";
    }else if(!ctype_alpha($nombreUsuario)){
        $errorNombreUsuario = "El nombre sólo puede contener letras";
    }

    //Pais vacio
    if (empty($pais)) {
      $errorPais = "El pais es obligatorio";
    }

    //email vacio
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



    if(empty($contrasenaR) || strlen($contrasenaR) < 5){
      $errorContrasenaR = "La contraseña es muy corta";
    }
    elseif (strlen($contrasenaR) > 20) {
      $errorContrasenaR = "La contraseña es muy larga";
    }
    elseif ($contrasena !== $contrasenaR) {
      $errorContrasenaR = "Las contraseñas no coinciden";
    }

    // VALIDAR QUE LA FOTO SEA OBLIGATORIA
    if (empty($_FILES['userPhoto']['name'])) {
      $errorImg = "La foto es obligatoria";
    }

    //si no hay errores, hago algo
    if(empty($errorNombre) && empty($errorApellido) && empty($errorNombreUsuario) && empty($errorEmail) && empty($errorPais) && empty($errorContrasena)  && empty($errorContrasenaR) && empty($errorImg)){
        //puedo encriptar la contraseña
        //$contrasena = password_hash($contrasena,PASSWORD_DEFAULT);

        //puedo verificar si la contraseña es la misma que la que ya tengo
        //password_verify($contrasena,$passHasheada);

        //puedo agradecer por completar el formulario de manera valida
        echo "<h1>Registro exitoso</h1>";

        //puedo redirigir a otro lugar del sitio
        header('Location:index.php');
        echo "<h1>Registro exitoso</h1>";

        var_dump($_FILES['foto']);
        //Verifico si la foto llega bien
        if($_FILES['userPhoto']['error'] == UPLOAD_ERR_OK){
          //tomo la ruta temporal del archivo
          $desde = $_FILES['userPhoto']['tmp_name'];
          //creo un nombre unico de archivo (puede ser cualquier nombre)
          $archivo = $email;
          //busco la extension de la imagen dentro del nombre de la misma
          $ext = pathinfo($_FILES['userPhoto']['name'],PATHINFO_EXTENSION);
          //valido la extension
          if($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg'){
            $hasta = "avatars/".$archivo.".".$ext;
            //si todo esta bien hasta aca, subo el archivo
            move_uploaded_file($desde,$hasta);
          }else{
            $errorImg = "Formato inválido de imagen";
          }
        }else{
          $errorImg = "La userPhoto tuvo un error";
        }


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
      <div class="col-md-4 login-sec">
        <form class="login-form" action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <div class="form-row">
            <div class="col">
              <label>Nombre</label>
              <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre" value="<?php echo $nombre; ?>" required="required">
              <span> <?php echo $errorNombre; ?></span>
            </div>
            <div class="col">
              <label>Apellido</label>
              <input type="text" class="form-control" name="apellido" placeholder="Ingrese su apellido" value="<?php echo $apellido; ?>" required="required">
              <span> <?php echo $errorApellido; ?></span>
            </div>
          </div>          
        </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col">
                <label>Nombre de Usuario</label>
                <input type="text" class="form-control" name="nombreUsuario" placeholder="Josesito187" value="<?php echo $nombreUsuario; ?>" required="required">
                <span> <?php echo $errorNombreUsuario; ?></span>
              </div>
              <div class="col">
                <label>Pais de Nacimiento</label>
                <select id="inputState" class="form-control" name="userCountry" value="<?php echo $pais; ?>">
                  <option>País...</option>
                  <?php foreach ($paises as $key => $pais): ?>
                    <option value="<?php echo $key; ?>"><?php echo $pais; ?></option>
                  <?php endforeach; ?>
                </select>
                <span> <?php echo $errorPais; ?></span>
              </div>
            </div>          
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="ejemplo@gmail.com" name="userMail" value="<?php echo $email; ?>" required="required">
            <span> <?php echo $errorEmail; ?></span>      
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col">
                <label>Contraseña</label>
                <input type="password" class="form-control" name="userPass" placeholder="Contraseña" required="required">
                <span> <?php echo $errorContrasena; ?></span>
              </div>
              <div class="col">
                <label>Repetir Contraseña</label>
                <input type="password" class="form-control" name="userPassR" placeholder="Verifique contraseña" required="required">
                <span> <?php echo $errorContrasenaR; ?></span>
              </div>
            </div>          
          </div>
          <div class="form-group">
            <label>Avatar</label>
            <input type="file" class="text-center center-block file-upload" name="userPhoto">
            <span> <?php echo $errorImg; ?></span>
          </div>
          <div class="form-check">
            <label class="form-check-label">
            <input type="checkbox" class="form-check-input">
            <small>Recordarme</small>
            </label>
          </div>
          <button class="btn btn-success float-right" type="submit">Registrarse</button>
          <button class="btn float-right mr-3" type="reset">Resetear</button>
        </form>
        <div class="text-center">Ya tenes cuenta? <a href="login.php">Ingresá acá</a></div>
      </div>
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
    </div>
  </div>
</section>


    <?php include 'footer.php'; ?>
</body>
</html>

