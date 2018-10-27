<?php
    require 'head.php';
?>
<body>
        <?php
            require 'header.php';
        ?>

        <!-- ESTE ES EL CARROUSEL -->

    <div class="container">
      <div class="slider_ale col-md-12">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="images/foto1.jpeg" alt="First slide" style="height: 500px">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/foto2.jpeg" alt="Second slide" style="height: 500px">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/foto3.jpeg" alt="Third slide" style="height: 500px">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
          </a>
        </div>
      </div>
    </div>

  <!-- ACA TERMINA DEL CARROUSEL -->


  <!-- ACA VAN LOS PRODUCTOS -->

    <div class="container">
      <div class="col-md-12">
        <h1 class="text-center">Categorias</h1>
        <hr>
      </div>
      <div class="d-flex justify-content-around flex-wrap">
        <div class="col-xs-6 col-sm-3">
          <a href="categorias.php"> 
            <img class="mx-auto d-block" src="https://dafitistaticar-a.akamaihd.net/cms/1018-onsite-promociones-jeans.jpg" alt="Jeans" />
          </a>
          <h6 class="text-dark text-center">Jeans</h6>
        </div>

        <div class="col-xs-6 col-sm-3">
          <a href="categorias.php"> 
            <img class="mx-auto d-block" src="https://dafitistaticar-a.akamaihd.net/cms/1009-onsitemasc-camisasjeanspant-25offextra.jpg" alt="Pantalones" />
          </a>
          <h6 class="text-dark text-center">Pantalones</h6>
        </div>

        <div class="col-xs-6 col-sm-3">
          <a href="categorias.php"> 
            <img class="mx-auto d-block" src="https://dafitistaticar-a.akamaihd.net/cms/1018-onsite-promociones-camisas-2x1099.jpg" alt="Camisas" />
          </a>
          <h6 class="text-dark text-center">Camisas</h6>
        </div>

        <div class="col-xs-6 col-sm-3">
          <a href="categorias.php"> 
            <img class="mx-auto d-block" src="https://dafitistaticar-a.akamaihd.net/cms/0727-onsite-calzado-zapasprem-desde1299.jpg" alt="Zapatillas" />
          </a>
          <h6 class="text-dark text-center">Zapatillas</h6>
        </div>

        <div class="col-xs-6 col-sm-3">
          <a href="categorias.php"> 
            <img class="mx-auto d-block" src="https://dafitistaticar-a.akamaihd.net/cms/1018-onsite-deportes-20off.jpg" alt="Zapatillas Deportivas" />
          </a>
          <h6 class="text-dark text-center">Zapatillas Deportivas</h6>
        </div>

        <div class="col-xs-6 col-sm-3">
          <a href="categorias.php"> 
            <img class="mx-auto d-block" src="https://dafitistaticar-a.akamaihd.net/cms/1018-onsite-indumentaria_(1).jpg" alt="Buzos" />
          </a>
          <h6 class="text-dark text-center">Buzos</h6>
        </div>

        <div class="col-xs-6 col-sm-3">
          <a href="categorias.php"> 
            <img class="mx-auto d-block" src="https://dafitistaticar-a.akamaihd.net/cms/calzado_remerasmkp_171018b.jpg" alt="Remeras" />
          </a>
          <h6 class="text-dark text-center">Remeras</h6>
        </div>

        <div class="col-xs-6 col-sm-3">
          <a href="categorias.php"> 
            <img class="mx-auto d-block" src="https://dafitistaticar-a.akamaihd.net/cms/cluster_50off_050618.jpg" alt="Zapatillas" />
          </a>
          <h6 class="text-dark text-center">Zapatillas</h6>
        </div>

      </div>
    </div>

  <!-- ACA TERMINA DE SECCION DE LOS PRODUCTOS -->


      <?php include 'footer.php'; ?>

</body>
</html>
