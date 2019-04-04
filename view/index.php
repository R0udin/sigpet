<?php
require '../controller/ClientesController.php';
require '../controller/FornecedoresController.php';
require '../controller/ProdutosController.php';
error_reporting(E_ALL);
ini_set('display_errors', true);
spl_autoload_register(function($class) {
    if (file_exists("$class.php")) {
        require_once "$class.php";
        return true;
    }
});
?>
<!DOCTYPE html>
<html lang='pt-br'>
    <header>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <title>Sigpet</title>

      <!-- CSS  -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </header>
      <body>
        <ul id="dropdown1" class="dropdown-content">
          <li><a href="#!">Relatório 1</a></li>
          <li><a href="#!">Relatório 2</a></li>
          <li><a href="#!">Relatório 3</a></li>
        </ul>
        <div class="navbar-fixed">
          <nav class="white" role="navigation">
            <div class="nav-wrapper container">
            <a href="../index.php" class="brand-logo"><i class="material-icons">pets</i>Sigpet</a>
            <ul class="right hide-on-med-and-down">
              <li><a href="?controller=ProdutosController&method=listar">Produtos</a></li>
              <li><a href="?controller=FornecedoresController&method=listar">Fornecedores</a></li>
              <li><a href="#">Vendas</a></li>
              <li><a href="?controller=ClientesController&method=listar">Clientes</a></li>
              <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Relatórios<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
            <ul id="nav-mobile" class="sidenav">
              <li><a href="#">Navbar Link</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          </div>
        </nav>
      </div>
        <div id="index-banner" class="parallax-container">
          <div class="section no-pad-bot">
            <div class="container">
              <br><br>
              <h1 class="header center teal-text text-lighten-2">Sigpet</h1>
              <div class="row center">
                <h5 class="header col s12 light"><b></b></h5>
              </div>
              <div class="row center">
                <a href="#" class="waves-effect waves-light btn-large"><i class="material-icons right">monetization_on</i>Realizar venda</a>
              </div>
              <br><br>

            </div>
          </div>
          <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
        </div>
        <div class="container">
          <div class="section">

        <?php
        if ($_GET) {
            $controller = isset($_GET['controller']) ? ((class_exists($_GET['controller'])) ? new $_GET['controller'] : NULL ) : null;
            $method     = isset($_GET['method']) ? $_GET['method'] : null;
            if ($controller && $method) {
                if (method_exists($controller, $method)) {
                    $parameters = $_GET;
                    unset($parameters['controller']);
                    unset($parameters['method']);
                    call_user_func(array($controller, $method), $parameters);
                } else {
                    echo "Método não encontrado!";
                }
            } else {
                echo "Controller não encontrado!";
            }
        } else {
            echo '<h3>Clientes</h3><hr><div class="container">';
            echo 'Você deseja cadastrar Clientes? <br /><br />';
            echo '<a href="?controller=ClientesController&method=listar" class="btn btn-success">Cadastrar</a></div>';
        }
        ?>


        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="../js/materialize.js"></script>
        <script src="../js/init.js"></script>
        <script>$(".dropdown-trigger").dropdown();</script>

    </body>
</html>
