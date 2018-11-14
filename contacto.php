<?php
    require 'head.php';
?>
<body>
        <?php
            require 'header.php';

        ?>
<?php
  require 'Models/php-mailer-master/PHPMailerAutoload.php';

  $usuarioEmail = "";
  $nombre = "";
  $textarea = "";
  $nombreError = "";
  $emailError = "";
  $textareaError = "";
  $MensajeExitoso = "";
  $MensajeErroneo = "";

  if ($_POST) {
    $nombre = trim($_POST['nombre']);
    $usuarioEmail = trim($_POST['email']);
    $textarea = trim($_POST['texto']);

     if ( $nombre == "") {
       $nombreError = "Por favor complete su nombre";
       }
      elseif (strlen($nombre) < 3) {
       $nombreError = "El nombre es muy corto";
       }  
      elseif (empty($usuarioEmail)) {
        $emailError = "Por favor complete su email";
      }
      elseif (!filter_var($usuarioEmail, FILTER_VALIDATE_EMAIL)) {
        $emailError = "Por favor complete con un formato valido de email";
      }
      elseif (empty($textarea)) {
        $textareaError = "El mensaje no puede estar vacio";
      }
      elseif (strlen($textarea) < 10) {
        $textareaError = "El mensaje es muy corto";
      }
      else {
      $mail = new PHPMailer;

      //$mail->SMTPDebug = 2;                               // Enable verbose debug output

      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';  // especifico que el servidor de correo sea por Gmail
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'proyectodh1111@gmail.com';                 // Gmail ficticio que cree previamente
      $mail->Password = 'proyecto_dh1234';                           // Poner clave real de email
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP Puerto

      $mail->setFrom($_POST['email']); // El mail ficticio envia el mensaje
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
      $mail->Body    = $textarea. ' Enviado por '. $usuarioEmail;

         if(!$mail->send()) {
           $MensajeErroneo = 'No se pudo enviar el mensaje';
          echo 'Mailer Error: ' . $mail->ErrorInfo;
          } else {
          $MensajeExitoso = 'Mensaje enviado con exito. Prontor recibira su respuesta';
          header( "refresh:3;url=http://localhost/proyectodh/index.php" );
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
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.3309494285704!2d-58.38378924951871!3d-34.621076080359025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb28ea8781cb%3A0xb791570f7236c962!2sDigital+House!5e0!3m2!1ses!2sar!4v1541188280662" width="100%" height="550px" frameborder="0" style="border:0" allowfullscreen></iframe>
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
              <input type="text" class="form-control" placeholder="" name="nombre" value="<?php echo $nombre;?>" id="name">
              <div class="invalid-feedback">
              </div>    
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" placeholder="" name="email" value="<?php echo $usuarioEmail;?>">
              <div class="invalid-feedback">
              </div> 
            </div>     
          </div>
          <textarea class="form-control" placeholder="Dejanos tu mensaje..." rows="8" name="texto"><?php echo $textarea;?></textarea>
          <br>
          <button type="submit" class="btn btn-success float-right">Contactar</button>
            <div class="text-success"><?php echo $MensajeExitoso?></div>  
            <div class="text-danger"><?php echo $MensajeErroneo?></div>  
            <div class="text-danger"><?php echo $nombreError?></div>
            <div class="text-danger"><?php echo $emailError?></div>  
            <div class="text-danger"><?php echo $textareaError?></div>  
        </form>
      </div>
      <!-- FIN DE SECCION DEL PRODUCTO -->
  </div>
</div>

<!-- TERMINA SECCION DE CONTACTO -->


      <?php include 'footer.php'; ?>
    <script src="js/contacto.js"></script>
            
</body>
</html>
