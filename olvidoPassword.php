<?php
    require 'head.php';
?>
<body>
        <?php
            require 'header.php';
        ?>


  <!-- ACA VA OLVIDO DE PASSWORD -->

  <section class="login-block">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-12">
          <h1 class="text-center">Nueva Contraseña</h1>
          <hr>
        </div>
        <!-- ACA EMPIEZA LA COLUMNA IZQUIERA DE LA PANTALLA (FORM)-->
        <div class="col-md-4 login-sec">

          <form class="login-form" action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" placeholder="" name="email" value="">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="" name="password">
            </div>
            <div class="form-check">
              <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="recordame">
              <small>Recordarme</small>
              </label>
            </div>
            <button type="submit" class="btn btn-success float-right">Nueva contraseña</button>
          </form>

        </div>
        <!-- ACA TERMINA LA COLUMNA IZQUIERA DE LA PANTALLA (FORM)-->
      </div>
    </div>
  </section>

  <!-- ACA TERMINA DE SECCION DE OLVIDO DE PASSWORD -->


      <?php include 'footer.php'; ?>

</body>
</html>
