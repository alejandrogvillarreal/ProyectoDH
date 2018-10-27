<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">Nuestro logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="categorias.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categorias
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="categorias.php">Buzos</a>
                    <a class="dropdown-item" href="categorias.php">Remeras</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="categorias.php">Jeans</a>
                  </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contacto">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="preguntas.php">FAQ</a>
                </li>
                <li class="nav-item dropdown my-auto">
                  <a class="nav-link dropdown-toggle" href="perfil.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Mi cuenta
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="perfil.php">Perfil</a>
                    <a class="dropdown-item" href="#">Compras </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="login.php">Salir</a>
                  </div>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Buscar...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <!--<i class="fa fa-search"></i>-->Buscar
                        </button>
                    </div>
                </div>
                <a class="btn btn-success btn-sm ml-3" href="carrito.php">
                    <!--<i class="fa fa-shopping-cart"></i>--> Carrito
                    <span class="badge badge-light">3</span>
                </a>
            </form>
        </div>
    </div>
</nav>
