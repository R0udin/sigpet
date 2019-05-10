<?php
require '../controller/ClientesController.php';
require '../controller/FornecedoresController.php';
require '../controller/ProdutosController.php';
require '../controller/VendasController.php';
require '../controller/FuncionariosController.php';
error_reporting(E_ALL);
ini_set('display_errors', true);
spl_autoload_register(function($class) {
    if (file_exists("$class.php")) {
        require_once "$class.php";
        return true;
    }
});
include "../config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: ../login.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: ../login.php');
}
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
        <ul id="rels" class="dropdown-content">
          <li><a href="#!">Funcionários</a></li>
          <li><a href="#!">Produtos</a></li>
          <li><a href="?controller=FornecedoresController&method=RelFor">Fornecedores</a></li>
          <li><a href="?controller=ClientesController&method=RelCliente">Clientes</a></li>
          <li><a href="?controller=VendasController&method=RelVenda">Vendas</a></li>
          <li><a href="RelatorioEstaticoVenda.php">Comparativo</a></li>
          <li><a href="#!">Relativo de Vendas</a></li>
        </ul>
        <form method='post' action="">
        <div class="navbar-fixed">
          <nav class="white" role="navigation">
            <div class="nav-wrapper container">
            <a href="../index.php" class="brand-logo"><i class="material-icons">pets</i>Sigpet</a>
            <ul class="right hide-on-med-and-down">
              <li><a href="?controller=ProdutosController&method=listar">Produtos</a></li>
              <li><a href="?controller=FornecedoresController&method=listar">Fornecedores</a></li>
              <li><a href="?controller=VendasController&method=listar">Vendas</a></li>
              <li><a href="?controller=ClientesController&method=listar">Clientes</a></li>
              <li><a href="?controller=FuncionariosController&method=listar">Funcionários</a></li>
              <li><a class="dropdown-trigger" href="#!" data-target="rels">Relatórios<i class="material-icons right">arrow_drop_down</i></a></li>
              <li><input type="submit" class="waves-effect waves-light btn-small" class="white-text" value="Logout" name="but_logout"></li>
            </ul>
            <ul id="nav-mobile" class="sidenav">
              <li><a href="#">Navbar Link</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          </div>
        </nav>
      </div>
    </form>
        <div id="index-banner" class="parallax-container">
          <div class="section no-pad-bot">
            <div class="container">
              <br><br>
              <h1 class="header center teal-text text-lighten-2">Sigpet</h1>
              <div class="row center">
                <h5 class="header col s12 light"><b></b></h5>
              </div>
              <div class="row center">
                <a href="?controller=VendasController&method=criar" class="waves-effect waves-light btn-large"><i class="material-icons right">monetization_on</i>Realizar venda</a>
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
        }
        ?>


        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="../js/jquery.mask.js"></script>
        <script src="../js/materialize.js"></script>
        <script src="../js/init.js"></script>
        <script>$(".dropdown-trigger").dropdown();</script>

    </body>
</html>
