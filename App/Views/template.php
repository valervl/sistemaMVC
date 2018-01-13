<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta http-equiv = "content-type" content = "text/html; charset=UTF-8">
        <title>Sistema de Protocolo Eletrônico de Arquivos</title>
        <link href="<?php echo BASE; ?>App/assets/css/bootstrap.min.css" rel="stylesheet">        
        <link href="<?= BASE; ?>App/assets/css/style.css" rel="stylesheet">

        <script src="<?php echo BASE; ?>App/assets/js/jquery.js"></script>
        <script src="<?php echo BASE; ?>App/assets/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            var BASE = '<?php echo BASE; ?>';
        </script>
        <script src="<?php echo BASE; ?>App/assets/js/ajax.js"></script>
    </head>
    <body>

       <div class="container">

      <header class="masthead">
        <h3 class="text-muted">Protocolo Eletrônico</h3>

        <nav class="navbar navbar-expand-md navbar-light bg-light rounded mb-3">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav text-md-center nav-justified w-100">
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo BASE; ?>">Home <span class="sr-only">(current)</span></a>
              </li>              
              <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE; ?>home/sobre">Sobre o Sistema</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE; ?>contato">Contato</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE; ?>login">Login</a>
              </li>
              
            </ul>
          </div>
        </nav>
      </header>

      <main role="main">

        <?php $this->loadViewInTemplate($viewName, $viewData); ?>

      </main>

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; Company 2017</p>
      </footer>

    </div> <!-- /container -->

    </body>
</html>
