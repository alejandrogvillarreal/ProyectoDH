<?php
    require 'head.php';
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
      <div class="col-sm-3"><!--left col-->
        <div class="text-center">
          <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
          <h6>Sube tu foto...</h6>
          <input type="file" class="text-center center-block file-upload">
        </div>
        </div><!--/col-3-->

      <div class="col-sm-9">
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">  
                        <div class="form-row">
                <div class="col">
                <label><h6>Nombre:</h6></label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre" required="required">
                </div>
                <div class="col">
                <label><h6>Apellido:</h6></label>
                <input type="text" class="form-control" name="apellido" placeholder="Apellido" required="required">
                </div>
            </div> 
                      </div>
          
                      <div class="form-group">  
                        <div class="form-row">
                <div class="col">
                <label><h6>Nombre de Usuario:</h6></label>
                <input type="text" class="form-control" name="nombreUsuario" placeholder="pepekpo123" required="required">
                </div>
                <div class="col">
                <label><h6>Pais:</h6></label>
                <select id="inputState" class="form-control" name="userCountry" value="<?php echo $pais; ?>">
                          <option>País...</option>
                          <?php foreach ($paises as $key => $pais): ?>
                            <option value="<?php echo $key; ?>"><?php echo $pais; ?></option>
                          <?php endforeach; ?>
                </select>
                </div>
            </div> 
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label><h6>Email:</h6></label>
                              <input type="email" class="form-control" name="userMail" placeholder="Ingrese su email"> 
                          </div>
                      </div>
                          
                          <div class="form-group">  
                        <div class="form-row">
                <div class="col">
                <label><h6>Contraseña:</h6></label>
                <input type="text" class="form-control" name="userPass" required="required">
                </div>
                <div class="col">
                <label><h6>Confirmar contraseña:</h6></label>
                <input type="text" class="form-control" name="userPassR" required="required">
                </div>
            </div> 
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button class="btn btn-success" type="submit">Guardar cambios</button>
                                <button class="btn" type="reset">Resetear</button>
                            </div>
                      </div>
                </form>
            </div>
        </div> 
        <!-- termina row -->
  </div><!--/tab-content-->

<!-- TERMINA SECCION DE PERFIL -->
  

      <?php include 'footer.php'; ?>

</body>
</html>
