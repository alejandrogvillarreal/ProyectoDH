<?php
    require 'head.php';
?>
<body>
        <?php
            require 'header.php';
        ?>


  <!-- ACA VAN LOS PRODUCTOS -->

<!-- ACA EMPIEZA EL SEGUNDO MENU -->
  <div class="container">
      <div class="row">
          <div class="col">
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                      <li class="breadcrumb-item"><a href="categorias.php">Hombre</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Buzos</li>
                  </ol>
              </nav>
          </div>
      </div>
  </div>

  <!-- ACA TERMINA EL SEGUNDO MENU -->

  <div class="container">
      <div class="row">
        <!-- ESTE ES EL MENU LATERAL IZQUIERDO -->
          <div class="col-12 col-sm-3">
              <div class="card bg-light mb-3">
                  <div class="card-header bg-primary text-white text-uppercase">Categorias</div>
                  <ul class="list-group category_block">
                      <li class="list-group-item"><a href="categorias.php">Categoria 1</a></li>
                      <li class="list-group-item"><a href="categorias.php">Categoria 2</a></li>
                      <li class="list-group-item"><a href="categorias.php">Categoria 3</a></li>
                      <li class="list-group-item"><a href="categorias.php">Categoria 4</a></li>
                      <li class="list-group-item"><a href="categorias.php">Categoria 5</a></li>
                  </ul>
              </div>
              <!--<div class="card bg-light mb-3">
                  <div class="card-header bg-success text-white text-uppercase">Last product</div>
                  <div class="card-body">
                      <img class="img-fluid" src="https://dummyimage.com/600x400/55595c/fff" />
                      <h5 class="card-title">Nombre del producto</h5>
                      <p class="card-text">Breve descripción.</p>
                      <p class="bloc_left_price">$600</p>
                  </div>
              </div>-->
          </div>
          <!-- FIN DEL EL MENU LATERAL IZQUIERDO -->


          <!-- ACA EMPIEZA LA SECCION DERECHA DE LA PAGINA(PRODUCTOS) -->
          <div class="col">
              <div class="row">
                  <div class="col-12 col-md-6 col-lg-4">
                      <div class="card">
                          <a href="producto.php">
                            <img class="card-img-top" src="images/ropa/Hombre/Buzos/buzo-1.jpg" alt="Card image cap">
                          </a>
                          <div class="card-body">
                              <h4 class="card-title"><a href="producto.php" title="View Product">Nombre del producto</a></h4>
                              <p class="card-text">Breve descripción.</p>
                              <div class="row">
                                  <div class="col">
                                      <p class="btn btn-danger btn-block">$600</p>
                                  </div>
                                  <div class="col">
                                      <a href="#" class="btn btn-success btn-block">Comprar</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4">
                      <div class="card">
                          <a href="producto.php">
                            <img class="card-img-top" src="images/ropa/Hombre/Buzos/buzo-2.jpg" alt="Card image cap">
                          </a>
                          <div class="card-body">
                              <h4 class="card-title"><a href="producto.php" title="View Product">Nombre del producto</a></h4>
                              <p class="card-text">Breve descripción.</p>
                              <div class="row">
                                  <div class="col">
                                      <p class="btn btn-danger btn-block">$600</p>
                                  </div>
                                  <div class="col">
                                      <a href="#" class="btn btn-success btn-block">Comprar</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4">
                      <div class="card">
                          <a href="producto.php">
                            <img class="card-img-top" src="images/ropa/Hombre/Buzos/buzo-3.jpg" alt="Card image cap">
                          </a>
                          <div class="card-body">
                              <h4 class="card-title"><a href="producto.php" title="View Product">Nombre del producto</a></h4>
                              <p class="card-text">Breve descripción.</p>
                              <div class="row">
                                  <div class="col">
                                      <p class="btn btn-danger btn-block">$600</p>
                                  </div>
                                  <div class="col">
                                      <a href="#" class="btn btn-success btn-block">Comprar</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4">
                      <div class="card">
                          <a href="producto.php">
                            <img class="card-img-top" src="images/ropa/Hombre/Buzos/buzo-4.jpg" alt="Card image cap">
                          </a>
                          <div class="card-body">
                              <h4 class="card-title"><a href="producto.php" title="View Product">Nombre del producto</a></h4>
                              <p class="card-text">Breve descripción.</p>
                              <div class="row">
                                  <div class="col">
                                      <p class="btn btn-danger btn-block">$600</p>
                                  </div>
                                  <div class="col">
                                      <a href="#" class="btn btn-success btn-block">Comprar</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4">
                      <div class="card">
                          <a href="producto.php">
                            <img class="card-img-top" src="images/ropa/Hombre/Buzos/buzo-5.jpg" alt="Card image cap">
                          </a>
                          <div class="card-body">
                              <h4 class="card-title"><a href="producto.php" title="View Product">Nombre del producto</a></h4>
                              <p class="card-text">Breve descripción.</p>
                              <div class="row">
                                  <div class="col">
                                      <p class="btn btn-danger btn-block">$600</p>
                                  </div>
                                  <div class="col">
                                      <a href="#" class="btn btn-success btn-block">Comprar</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4">
                      <div class="card">
                          <a href="producto.php">
                            <img class="card-img-top" src="images/ropa/Hombre/Buzos/buzo-6.jpg" alt="Card image cap">
                          </a>
                          <div class="card-body">
                              <h4 class="card-title"><a href="producto.php" title="View Product">Nombre del producto</a></h4>
                              <p class="card-text">Breve descripción.</p>
                              <div class="row">
                                  <div class="col">
                                      <p class="btn btn-danger btn-block">$600</p>
                                  </div>
                                  <div class="col">
                                      <a href="#" class="btn btn-success btn-block">Comprar</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-12">
                      <nav>
                          <ul class="pagination justify-content-center">
                              <li class="page-item disabled">
                                  <a class="page-link" href="#" tabindex="-1">Anterior</a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item active">
                                  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                  <a class="page-link" href="#">Siguiente</a>
                              </li>
                          </ul>
                      </nav>
                  </div>
              </div>
          </div>
          <!-- ACA TERMINA LA SECCION DERECHA DE LA PAGINA(PRODUCTOS) -->
      </div>
  </div>
  <!-- ACA TERMINA DE SECCION DE LOS PRODUCTOS -->


      <?php include 'footer.php'; ?>

</body>
</html>
