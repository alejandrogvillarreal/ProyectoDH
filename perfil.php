<?php
    require 'head.php';

    //NO VA EL include("soporte.php"); PORQUE YA LO TENGO INCLUIDO EN EL HEAD

		//$usuarioLogueado = $auth->usuarioLogueado($db); //NO VA PORQUE ESTA EN EL HEAD

    // ACA YA TENGO LA VARIABLE $usuarioLogueado

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

    if (!$auth->estaLogueado()) {
      header("Location:index.php");
      exit;
    }


    //GUARDO LOS DATOS DEL USUARIO EN VARIABLES
    $nombre = $usuarioLogueado->getNombre();
    $apellido = $usuarioLogueado->getApellido();
    $email = $usuarioLogueado->getEmail();
    $username = $usuarioLogueado->getUsername();
    $userPais = $usuarioLogueado->getPais();
    $password = $usuarioLogueado->getPassword();
    $imagen = $usuarioLogueado->getImagen();
    //var_dump($imagen);

    $errores = [];

    if ($_POST) {
      $errores = $validator->validarModificacion($_POST, $db);

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

        $usuarioLogueado->setNombre($_POST["nombre"]);
        $usuarioLogueado->setApellido($_POST["apellido"]);
        $usuarioLogueado->setEmail($_POST["email"]);
        $usuarioLogueado->setUsername($_POST["username"]);
        $usuarioLogueado->setPais($_POST["pais"]);
        $usuarioLogueado->setPassword(password_hash($_POST["password"], PASSWORD_DEFAULT));

        if (isset($_FILES['userPhoto']) && !empty($_FILES["userPhoto"]["name"])) {
          $imagen = $usuarioLogueado->guardarImagen($email);
          $usuarioLogueado->setImagen($imagen);
        }

        $db->modificarUsuario($usuarioLogueado,$imagen);

      }
    }


?>
<body>
        <?php
            require 'header.php';

        ?>

<!-- SECCION DE PERFIL -->

  <div class="container">
    <h1 class="text-center">Perfil</h1>
    <hr>
    <div class="row">
      <!-- ACA EMPIEZA LA SECCION DE LA IZQUIERDA DE LA PANTALLA (FOTO) -->
      <div class="col-sm-3 mt-5"><!--left col-->
        <div class="text-center">
          <!-- <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar"> -->
          <img src="images/avatars/<?php echo $imagen;?>" class="avatar img-circle img-thumbnail" alt="avatar">

          <ul class="errores">
          <?php foreach ($errores as $error) : ?>
            <li>
              <?=$error?>
            </li>
          <?php endforeach; ?>
          </ul>
        </div>
      </div><!--/col-3-->
      <!-- ACA TERMINA LA SECCION DE LA IZQUIERDA DE LA PANTALLA (FOTO) -->

      <!-- ACA EMPIEZA LA SECCION DE LA DERECHA DE LA PANTALLA (DATOS) -->
      <div class="col-sm-9">
        <button class="btn btn-info float-right" type="submit" id="botonEditar">Editar Perfil</button>
        <br>
        <br>
        <form class="form perfil-form" action="" method="post" id="registrationForm" enctype="multipart/form-data">
          <h6>Subí tu foto...</h6>
          <div class="custom-file form-group">
            <!-- <label>Avatar</label> -->
            <input type="file" class="custom-file-input text-center center-block" id="customFile" name="userPhoto" disabled>
            <label class="custom-file-label text-left" for="customFile">Elegir</label>
            <span> <?php // echo $errorImg; ?></span>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col">
                <label><h6>Nombre:</h6></label>
                <input type="text" class="form-control" name="nombre" value="<?php echo $nombre;?>" disabled>
                <div class="invalid-feedback">
                </div>
              </div>
              <div class="col">
                <label><h6>Apellido:</h6></label>
                <input type="text" class="form-control" name="apellido" value="<?php echo $apellido;?>" disabled>
                <div class="invalid-feedback">
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col">
                <label><h6>Nombre de Usuario:</h6></label>
                <input type="text" class="form-control" name="username" value="<?php echo $username;?>" disabled>
                <div class="invalid-feedback">
                </div>
              </div>
              <div class="col">
                <label><h6>Pais:</h6></label>
                <select id="inputState" class="form-control" name="pais" value="<?php echo $pais; ?>" disabled>
                    <?php foreach ($paises as $key => $pais) : ?>
                    <?php if ($key == $_POST["pais"]) : ?>
                      <option value="<?php echo $key;?>" <?php echo 'selected="selected" '; ?>><?php echo $pais; ?></option>
                    <?php else: ?>
                      <option <?php if($key == $userPais) echo 'selected="selected" '; ?> value="<?php echo $key; ?>"><?php echo $pais; ?></option>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-xs-6">
              <label><h6>Email:</h6></label>
              <input type="email" class="form-control" name="email" value="<?php echo $email;?>" disabled>
              <div class="invalid-feedback">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col">
                <label><h6>Contraseña:</h6></label>
                <input type="password" class="form-control" name="password" value="<?php echo $apellido;?>" disabled>
                <div class="invalid-feedback">
                </div>
              </div>
              <div class="col">
                <label><h6>Confirmar contraseña:</h6></label>
                <input type="password" class="form-control" name="passwordR" value="<?php echo $apellido;?>" disabled>
                <div class="invalid-feedback">
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-xs-12">
              <br>
              <button class="btn btn-danger float-left" type="reset" id="botonDescartar" hidden>Descartar</button>
              <button class="btn btn-success float-right" type="submit" id="botonGuardar" hidden>Guardar cambios</button>
              <!-- <button class="btn" type="reset">Resetear</button> -->
            </div>
          </div>
        </form>


      </div>
      <!-- ACA TERMINA LA SECCION DE LA DERECHA DE LA PANTALLA (DATOS) -->
    </div><!-- termina row -->
  </div><!--/tab-content-->

<!-- TERMINA SECCION DE PERFIL -->


      <?php include 'footer.php'; ?>

</body>
</html>
