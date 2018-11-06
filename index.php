<?php
    require 'head.php';

    //NO VA EL include("soporte.php"); PORQUE YA LO TENGO INCLUIDO EN EL HEAD

		//$usuarioLogueado = $auth->usuarioLogueado($db); //NO VA PORQUE ESTA EN EL HEAD

    // ACA YA TENGO LA VARIABLE $usuarioLogueado


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
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="images/foto1.jpeg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/foto2.jpeg" alt="Second slide">
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
      <div class="row">
        <div class="col-md-12 mb-5">
          <h1 class="text-center">Categorias</h1>
          <hr>
        </div>
      </div>
    </div>

    <!-- ACA VA LA SECCION DE MUJERES -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center">Mujeres</h1>
          <hr>
        </div>
        <div class="d-flex flex-wrap justify-content-around">
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <h5 class="text-dark text-center">Sandalias</h5>
            <a href="categorias.php">
              <img class="mx-auto d-block" src="https://dafitistaticar-a.akamaihd.net/cms/sandalias_ss19_140918.jpg" alt="Sandalias" />
            </a>
            <br>
          </div>

          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <h5 class="text-dark text-center">Remeras</h5>
            <a href="categorias.php">
              <img class="mx-auto d-block" src="https://dafitistaticar-a.akamaihd.net/cms/251x251_remeramangalarga_040918.jpg" alt="Remeras" />
            </a>
            <br>
          </div>

          <!-- <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <h5 class="text-dark text-center">Camperas</h5>
            <a href="categorias.php">
              <img class="mx-auto d-block" src="https://dafitistaticar-a.akamaihd.net/cms/promo_750ndu_170718.jpg" alt="Camperas" />
            </a>
            <br>
          </div> -->

          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <h5 class="text-dark text-center">Pantalones</h5>
            <a href="categorias.php">
              <!-- <img class="mx-auto d-block" src="https://dafitistaticar-a.akamaihd.net/cms/1009-onsitemasc-camisasjeanspant-25offextra.jpg" alt="Pantalones" /> -->
              <img class="mx-auto d-block" src="https://dafitistaticar-a.akamaihd.net/cms/cybermonday18/desktop/Femenino/CM_onsite_jeans231018.jpg" alt="Pantalones" />
            </a>
            <br>
          </div>

          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <h5 class="text-dark text-center">Camisas</h5>
            <a href="categorias.php">
              <img class="mx-auto d-block" src="https://dafitistaticar-a.akamaihd.net/cms/promo_bllusas_140818.jpg" alt="Camisas" />
            </a>
            <br>
          </div>

          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <h5 class="text-dark text-center">Blusas</h5>
            <a href="categorias.php">
              <img class="mx-auto d-block" src="https://dafitistaticar-a.akamaihd.net/cms/CM_onsite_blusashasta65_261018.jpg" alt="Camperas" />
            </a>
            <br>
          </div>

          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <h5 class="text-dark text-center">Vestidos</h5>
            <a href="categorias.php">
              <img class="mx-auto d-block" src="https://dafitistaticar-a.akamaihd.net/cms/promo_vestidos_030818.jpg" alt="Vestidos" />
            </a>
            <br>
          </div>
        </div>
      </div>
    </div>
      <!-- CATEGORIAS DE MUJERES -->

      <!-- CATEGORIAS DE HOMBRES -->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center">Hombres</h1>
            <hr>
          </div>
          <div class="d-flex flex-wrap justify-content-around">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <h5 class="text-dark text-center">Pantalones</h5>
              <a href="categorias.php">
                <!-- <img class="mx-auto d-block" src="https://dafitistaticar-a.akamaihd.net/cms/1009-onsitemasc-camisasjeanspant-25offextra.jpg" alt="Pantalones" /> -->
                <img class="mx-auto d-block" src="https://dafitistaticar-a.akamaihd.net/cms/0827-masc-promociones-pantalones.jpg" alt="Pantalones" />
              </a>
              <br>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <h5 class="text-dark text-center">Camisas</h5>
              <a href="categorias.php">
                <img class="mx-auto d-block" src="https://dafitistaticar-a.akamaihd.net/cms/1018-onsite-promociones-camisas-2x1099.jpg" alt="Camisas" />
              </a>
              <br>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <h5 class="text-dark text-center">Zapatillas</h5>
              <a href="categorias.php">
                <img class="mx-auto d-block" src="https://dafitistaticar-a.akamaihd.net/cms/500calzado.jpg" alt="Zapatillas" />
              </a>
              <br>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <h5 class="text-dark text-center">Buzos</h5>
              <a href="categorias.php">
                <img class="mx-auto d-block" src="https://dafitistaticar-a.akamaihd.net/cms/1018-onsite-buzospantyjeans-30offextra_(1).jpg" alt="Buzos" />
              </a>
              <br>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <h5 class="text-dark text-center">Remeras</h5>
              <a href="categorias.php">
                <img class="mx-auto d-block" src="https://dafitistaticar-a.akamaihd.net/cms/1003-onsite-remeras-h.jpg" alt="Remeras" />
              </a>
              <br>
            </div>
          </div>
        </div>
      </div>
    <!-- TERMINA LA CATEGORIA DE HOMBRES -->

  <!-- ACA TERMINA DE SECCION DE LOS PRODUCTOS -->


      <?php include 'footer.php'; ?>

</body>
</html>
