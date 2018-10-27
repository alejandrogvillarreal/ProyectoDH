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
  $nombreCompleto = "";
  $email = "";
  $contrasena = "";
  $nombreUsuario = "";
  $pais = "";
  $contrasenaR = "";

  $errorNombreCompleto = "";
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

    $nombreCompleto = trim($_POST['nombreCompleto']); // trim() elimina los espacios en blanco al inicio y al final
    $nombreUsuario = trim($_POST['nombreUsuario']);
    $email = trim($_POST['userMail']);
    $contrasena = $_POST['userPass'];
    $contrasenaR = $_POST['userPassR'];
    $pais = trim($_POST['userCountry']);


    //nombre vacio
    if(!isset($nombreCompleto) ){
        $errorNombreCompleto = "El nombre es obligatorio.<br>";
    //cantidad de caracteres del nombre
    }else if( strlen($nombreCompleto) < 4 || strlen($nombreCompleto) > 30){
        $errorNombreCompleto = "El nombre debe ser de al menos 3 caracteres y menor a 30 caracteres.<br>";
    }else if(!ctype_alpha($nombreCompleto)){
        $errorNombreCompleto = "El nombre sólo puede contener letras";
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
    if(empty($errorNombreCompleto) && empty($errorNombreUsuario) && empty($errorEmail) && empty($errorPais) && empty($errorContrasena)  && empty($errorContrasenaR) && empty($errorImg)){
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
  <div class="container">
    <?php
        require 'header.php';
    ?>
    <div class="form-registro">

      <h2>Registrate</h2>
      <br><br>

      <form action="" method="post" enctype="multipart/form-data">

        <label for="nombreCompleto">Nombre Completo:</label>
        <br>
        <input type="text" name="nombreCompleto" value="<?php echo $nombreCompleto; ?>">
        <br>
        <span> <?php echo $errorNombreCompleto; ?></span>

        <br><br>

        <label for="nombreUsuario">Nombre de Usuario:</label>
        <br>
          <input type="text" name="nombreUsuario" value="<?php echo $nombreUsuario; ?>">
          <br>
          <span> <?php echo $errorNombreUsuario; ?></span>

        <br><br>

        <label>Pais de nacimiento:</label>
        <select name="userCountry" value="<?php echo $pais; ?>">
          <option value="">Seleccione un Pais</option>
          <?php foreach ($paises as $key => $pais): ?>
            <option value="<?php echo $key; ?>"><?php echo $pais; ?></option>
          <?php endforeach; ?>
        </select>
        <br>
        <span> <?php echo $errorPais; ?></span>

        <br><br>

        <label>Correo electrónico:</label>
        <br>
        <input type="email" name="userMail" value="<?php echo $email; ?>">
        <br>
        <span> <?php echo $errorEmail; ?></span>

        <br><br>

        <label for="">Contraseña</label>
        <br>
        <input type="password" name="userPass" maxlength="8">
        <br>
        <span> <?php echo $errorContrasena; ?></span>

        <br><br>

        <label for="">Repetir contraseña</label>
        <br>
        <input type="password" name="userPassR" placeholder="Verifique su contraseña" maxlength="8">
        <br>
        <span> <?php echo $errorContrasenaR; ?></span>

        <br><br>

        <label for="avatar">Subi tu Avatar - Imagen de perfil:</label>
        <input type="file" name="userPhoto">
        <br>
        <span> <?php echo $errorImg; ?></span>

        <div class="buttons">
          <button type="reset">Borrar</button>
          <button type="submit">Registrarse</button>
        </div>
      </div>
         <div class="link-index">
            <p>Volver al <a href="index.php" title="">Inicio</a></p>
         </div>
       <?php include 'footer.php'; ?>

    </form>
  </div>
</body>
</html>
