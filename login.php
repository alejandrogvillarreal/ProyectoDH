<?php

  require 'head.php';


  if ($auth->estaLogueado()) {
    header("Location:index.php");
    exit;
  }


  //VARIABLES
  $email = "";

  $errores = [];

	if ($_POST) {
		$errores = $validator->validarLogin($_POST,$db);

    // SI NO HAY ERROR DE EMAIL GUARDO EL EMAIL EN UNA VARIABLE PARA PERSISTIR LOS DATOS
    if (!isset($errores["email"])) {
      $email = $_POST["email"];
    }

		if (count($errores) == 0) {
			//LOGUEAR
      $auth->loguear($_POST["email"]);
			if (isset($_POST["recordame"])) {
				//Quiere que lo recuerde
				 $auth->recordame($_POST["email"]);
			}
      		header("Location:index.php");
		}
	}

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

      <!-- ACA EMPIEZA LA COLUMNA IZQUIERDA DE LA PANTALLA (FOTOS)-->
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
                  <h2>Empeza a sumar puntos</h2>
                  <p>Obtene puntos y canjealos para un mayor descuento</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/carrousel-form-2.jpeg" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                <div class="banner-text">
                  <h2>Te estamos esperando</h2>
                  <p>Enterate de todas nuestras promociones y descuentos</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/carrousel-form-3.jpeg" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
                <div class="banner-text">
                  <h2>Calidad y variedad</h2>
                  <p>Contamos con una extensa linea de indumentaria</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ACA TERMINA LA COLUMNA IZQUIERDA DE LA PANTALLA (FOTOS)-->
      <!-- ACA EMPIEZA LA COLUMNA DERECHA DE LA PANTALLA (FORM)-->
      <div class="col-md-4 login-sec">


        <form class="login-form clearfix" action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="" name="email" value="<?php echo $email; ?>">
            <div class="invalid-feedback">
            </div>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="" name="password">
            <div class="invalid-feedback">
            </div>
          </div>
          <div class="form-check">
            <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="recordame">
            <small>Recordarme</small>
            </label>
          </div>
          <button type="submit" class="btn btn-success float-right">Ingresar</button>
        </form>

        <div class="text-danger font-weight-bold">
          <ul>
            <?php foreach ($errores as $error) : ?>
              <li>
                <?=$error?>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="etc-login-form clearfix mt-2">
          <div class="text-center">Olvidaste tu contraseña? <a href="olvidoPassword.php">Click Acá</a></div>
          <div class="text-center">Aún no tenes cuenta? <a href="registro.php">Registrate acá</a></div>
        </div>

        <!-- PARA IMPRIMIR LOS ERRORES -->



      </div>
      <!-- ACA TERMINA LA COLUMNA DERECHA DE LA PANTALLA (FORM)-->
    </div>
  </div>
</section>

    <?php include 'footer.php'; ?>
    <!-- ESTE ES EL SCRIPT PARA LAS VALIDACIONES DEL LOGIN -->
    <script src="js/login.js"></script>
</body>
</html>
