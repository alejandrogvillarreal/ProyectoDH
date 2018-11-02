<?php
    require 'head.php';
?>
<body>
        <?php
            require 'header.php';

        ?>

<!-- SECCION DE CONTACTO -->

<div class="container">
  <br>
  <div class="row">
      <!-- SECCION DE LA IMAGEN -->
      <div class="col-12 col-lg-6">
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d112061.09262729759!2d77.208022!3d28.632485!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x644e33bc3def0667!2sIndior+Tours+Pvt+Ltd.!5e0!3m2!1sen!2sus!4v1527779731123" width="100%" height="550px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
      <!-- FIN SECCION IMAGEN -->

      <!-- SECCION DEL PRODUCTO -->
      <div class="col-12 col-lg-6 add_to_cart_block">
        <h1 class="text-center">Contactanos</h1>
        <hr>
        <form class="login-form" action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-group">
              <label>Nombre</label>
              <input type="text" class="form-control" placeholder="" name="userName">
            </div>
            <label>Email</label>
            <input type="email" class="form-control" placeholder="" name="userMail">
          </div>
          <textarea class="form-control" placeholder="Dejanos tu mensaje..." rows="8" name="texto"></textarea>
          <br>
          <button type="submit" class="btn btn-success float-right">Contactar</button>
        </form>
      </div>
      <!-- FIN DE SECCION DEL PRODUCTO -->
  </div>
</div>

<!-- TERMINA SECCION DE CONTACTO -->


      <?php include 'footer.php'; ?>

</body>
</html>
