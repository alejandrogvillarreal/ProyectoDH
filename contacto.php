<?php
    require 'head.php';
?>
<body>
        <?php
            require 'header.php';

        ?>
<?php
  require 'Models/php-mailer-master/PHPMailerAutoload.php';

  $email = "";
  $nombre = "";
  $texto = "";
  // $nombreError = "";
  // $emailError = "";
  // $textoError = "";
  // $MensajeErroneo = "";
  $MensajeExitoso = "";

  $errores = [];

  if ($_POST) {
    $errores = $validator->validarContacto($_POST, $db);

    if (!isset($errores["nombre"])) {
      $nombre = $_POST["nombre"];
    }

    if (!isset($errores["email"])) {
      $email = $_POST["email"];
    }
    if (!isset($errores["texto"])) {
      $texto = $_POST["texto"];
    }


    if (count($errores) == 0) {
      $mail = new PHPMailer;

      //$mail->SMTPDebug = 2;                               // Enable verbose debug output

      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';  // especifico que el servidor de correo sea por Gmail
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'proyectodh1111@gmail.com';                 // Gmail ficticio que cree previamente
      $mail->Password = 'proyecto_dh1234';                           // Poner clave real de email
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP Puerto

      $mail->setFrom($email);                        // El mail ficticio envia el mensaje
      $mail->addAddress('proyectodh1111@gmail.com');        // Quien lo recibe, deberia ir el email que llegue por post

      // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
      // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
      // $mail->isHTML(true);                                  // Set email format to HTML
      $mail->smtpConnect([
          'ssl' => [
              'verify_peer' => false,
              'verify_peer_name' => false,
              'allow_self_signed' => true
          ]
      ]);
      $mail->Subject = 'Consulta de usuario';
      $mail->Body    = $texto . ' Enviado por ' . $email . " " .$nombre;

         if(!$mail->send()) {
           $MensajeErroneo = 'No se pudo enviar el mensaje';
          echo 'Mailer Error: ' . $mail->ErrorInfo;
          } else {
          $MensajeExitoso = 'Mensaje enviado con exito. Pronto recibirá su respuesta';
          }
    }
  }



  ?>
<!-- SECCION DE CONTACTO -->

<div class="container">
  <br>
  <div class="row">
      <!-- SECCION DE LA IMAGEN -->
      <div class="col-12 col-lg-6">
        <div class="map">
          <iframe class="shadow-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.3309494285704!2d-58.38378924951871!3d-34.621076080359025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb28ea8781cb%3A0xb791570f7236c962!2sDigital+House!5e0!3m2!1ses!2sar!4v1541188280662" width="100%" height="550px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
      <!-- FIN SECCION IMAGEN -->

      <!-- SECCION DEL PRODUCTO -->
      <div class="col-12 col-lg-6 add_to_cart_block">
        <h1 class="text-center">Contactanos</h1>
        <hr>
        <form class="login-form clearfix" action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-group">
              <label>Nombre</label>
              <input type="text" class="form-control" placeholder="" name="nombre" value="<?php echo $nombre;?>" id="name">
              <div class="invalid-feedback">
              </div>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" placeholder="" name="email" value="<?php echo $email;?>">
              <div class="invalid-feedback">
              </div>
            </div>
          </div>
          <textarea class="form-control" placeholder="Dejanos tu mensaje..." rows="8" name="texto"><?php echo $texto;?></textarea>
          <br>
          <button type="submit" class="btn btn-success float-right">Contactar</button>
        </form>
        <div class="text-success">
          <?php echo $MensajeExitoso?>
        </div>
        <div class="text-danger font-weight-bold">
          <ul>
            <?php foreach ($errores as $error) : ?>
              <li>
                <?=$error?>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <!-- FIN DE SECCION DEL PRODUCTO -->
  </div>
</div>

<!-- TERMINA SECCION DE CONTACTO -->


      <?php include 'footer.php'; ?>
    <script src="js/contacto.js"></script>

</body>
</html>
