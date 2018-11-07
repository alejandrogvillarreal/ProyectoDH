<?php
    require 'head.php';
?>
<body>
<?php
  require 'header.php';
?>

  <?php
  require 'Models/php-mailer-master/PHPMailerAutoload.php';

//////////////////////////////////7
  //VARIABLES
  $email = "";

  $errores = [];

	if ($_POST) {
		$errores = $validator->validarEmail($_POST,$db);

    // SI NO HAY ERROR DE EMAIL GUARDO EL EMAIL EN UNA VARIABLE PARA PERSISTIR LOS DATOS
    if (!isset($errores["email"])) {
      $email = $_POST["email"];
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

      $mail->setFrom('proyectodh1111@gmail.com'); // El mail ficticio envia el mensaje
      $mail->addAddress($email);        // Quien lo recibe, deberia ir el email que llegue por post

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


      $usuario = $db->buscarPorMail($_POST["email"]);
      $nuevaPassword = $db->generarNuevaPassword($usuario);


      $mail->Subject = 'Solicitud para cambiar la contrase'. utf8_decode("ñ") . 'a';
      $mail->Body    = 'Tu nueva contrase'. utf8_decode("ñ") .'a es:  ' . $nuevaPassword . '  . Copi' . utf8_decode("á") . ' y peg' . utf8_decode("á") . ' el codigo para ingresar tu cuenta y cambia la contrase'. utf8_decode("ñ") .'a' ;

    }
	}


  /////////////////////////////



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
               <?php
                if (isset($_POST['email']) && !isset($errores["email"])) {
                  if(!$mail->send()) {
                    echo 'No se pudo enviar el mensaje';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                  } else {
                    echo 'Hemos enviado un mensaje para cambiar la contraseña al mail solicitado';
                  }
                }
              ?>
            </div>
            <!-- <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="" name="password">
            </div>
            <div class="form-check">
              <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="recordame">
              <small>Recordarme</small>
              </label>
            </div>-->
            <button type="submit" class="btn btn-success float-right">Nueva contraseña</button>
          </form>

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
      </div>
    </div>
  </section>

  <!-- ACA TERMINA DE SECCION DE OLVIDO DE PASSWORD -->


      <?php include 'footer.php'; ?>

</body>
</html>
