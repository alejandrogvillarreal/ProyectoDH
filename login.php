<?php

  include_once("soporte.php");


  // if ($auth->estaLogueado()) {
  //   header("Location:inicio.php");exit;
  // }


  //VARIABLES
  $email = "";
  $password = "";

  $errores = [];

	if ($_POST) {
		$errores = $validator->validarLogin($_POST,$db);

    if (!isset($errores["email"])) {
      $email = $_POST["email"];
    }
    // if (!isset($errores["password"])) {
    //   $password = $_POST["pass"];
    // }

		if (count($errores) == 0) {
			// LOGUEAR
      // 		$auth->loguear($_POST["email"]);
			// if (isset($_POST["recordame"])) {
			// 	//Quiere que lo recuerde
			// 	$auth->recordame($_POST["email"]);
			// }
      		header("Location:index.php");
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
            <input type="email" class="form-control" placeholder="" name="email" value="<?php echo $email; ?>">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="" name="password">
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

        <!-- PARA IMPRIMIR LOS ERRORES -->
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
