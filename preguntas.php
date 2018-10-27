
<?php
    require 'head.php';
?>

<body>
    <?php require 'header.php';?>
 
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center">Preguntas Frecuentes</h1>
        <hr>
      </div>
      <div class="col-md-8 offset-md-2">
        <div class="bd-example">
          <div id="accordion" aria-multiselectable="true">
            <div class="card">
              <div class="card-header">
                <div>
                  <a data-toggle="collapse" href="#preguntas1" aria-expanded="false" class="collapsed">
                    <h3>Preguntas asdfghjkhgfds?</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                  </a>
                </div>
              </div>
              <div id="preguntas1" class="collapse" aria-expanded="false">
                <div class="card-block">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <div>
                  <a data-toggle="collapse" href="#preguntas2" aria-expanded="false" class="collapsed">
                    <h3>Preguntas asdfghjkhgfds?</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                  </a>
                </div>
              </div>
              <div id="preguntas2" class="collapse" aria-expanded="false">
                <div class="card-block">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <?php include 'footer.php'; ?>
</body>
</html>

