<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: login.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: login.php');
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
      <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </header>
      <body>
        <ul id="dropdown1" class="dropdown-content">
          <li><a href="#!">Funcionários</a></li>
          <li><a href="#!">Produtos</a></li>
          <li><a href="view/index.php?controller=FornecedoresController&method=RelFor">Fornecedores</a></li>
          <li><a href="view/index.php?controller=ClientesController&method=RelCliente">Clientes</a></li>
          <li><a href="view/index.php?controller=VendasController&method=RelVenda">Vendas</a></li>
          <li><a href="view/RelatorioEstaticoVenda.php">Comparativo</a></li>
          <li><a href="view/index.php?controller=VendasController&method=relatoriosvenda">Relativo de Vendas</a></li>
        </ul>
        <form method='post' action="">
        <div class="navbar-fixed">
          <nav class="white" role="navigation">
            <div class="nav-wrapper container">
            <a href="#" class="brand-logo"><i class="material-icons">pets</i>Sigpet</a>
            <ul class="right hide-on-med-and-down">
              <li><a href="view/index.php?controller=ProdutosController&method=listar">Produtos</a></li>
              <li><a href="view/index.php?controller=FornecedoresController&method=listar">Fornecedores</a></li>
              <li><a href="view/index.php?controller=VendasController&method=listar">Vendas</a></li>
              <li><a href="view/index.php?controller=ClientesController&method=listar">Clientes</a></li>
              <li><a href="view/index.php?controller=FuncionariosController&method=listar">Funcionários</a></li>
              <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Relatórios<i class="material-icons right">arrow_drop_down</i></a></li>
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
                <a href="view/index.php?controller=VendasController&method=criar" class="waves-effect waves-light btn-large"><i class="material-icons right">monetization_on</i>Realizar venda</a>
              </div>
              <br><br>

            </div>
          </div>
          <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
        </div>
        <div class="container">
          <div class="section">

            <!--   Icon Section   -->
            <div class="row">
              <div class="col s12 m4">
                <div class="icon-block">
                  <h2 class="center brown-text"><i class="material-icons">show_chart</i></h2>
                  <h5 class="center">Relatórios de venda</h5>

                  <p class="light">Espaço destinado para os Relatórios do sistema.</p>
                </div>
              </div>


              <div class="col s12 m4">
                <div class="icon-block">
                  <h2 class="center brown-text"><i class="material-icons">multiline_chart</i></h2>
                  <h5 class="center">Comparativos</h5>

                  <p class="light">Espaço destinado para os Relatórios do sistema.</p>
                </div>
              </div>

              <div class="col s12 m4">
                <div class="icon-block">
                  <h2 class="center brown-text"><i class="material-icons">attach_money</i></h2>
                  <h5 class="center">Finanças</h5>

                  <p class="light">Espaço destinado para os Relatórios do sistema.</p>
                </div>
              </div>
            </div>

          </div>
        </div>


        <div class="parallax-container valign-wrapper">
          <div class="section no-pad-bot">
            <div class="container">
              <div class="row center">
                <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
              </div>
            </div>
          </div>
          <div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 2"></div>
        </div>

        <div class="container">
          <div class="section">

            <div class="row">
              <div class="col s12 center">
                <h3><i class="mdi-content-send brown-text"></i></h3>
                <h4>Contact Us</h4>
                <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
              </div>
            </div>

          </div>
        </div>


        <div class="parallax-container valign-wrapper">
          <div class="section no-pad-bot">
            <div class="container">
              <div class="row center">
                <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
              </div>
            </div>
          </div>
          <div class="parallax"><img src="background3.jpg" alt="Unsplashed background img 3"></div>
        </div>

        <footer class="page-footer teal">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Sigpet</h5>
                <p class="grey-text text-lighten-4">Projeto integrador II</p>


              </div>
              <div class="col l3 s12">
                <h5 class="white-text">Configurações</h5>
                <ul>
                  <li><a class="white-text" href="#!">Link 1</a></li>
                  <li><a class="white-text" href="#!">Link 2</a></li>
                  <li><a class="white-text" href="#!">Link 3</a></li>
                  <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
              </div>
              <div class="col l3 s12">
                <h5 class="white-text">Administrativo</h5>
                <ul>
                  <li><a class="white-text" href="#!">Link 1</a></li>
                  <li><a class="white-text" href="#!">Link 2</a></li>
                  <li><a class="white-text" href="#!">Link 3</a></li>
                  <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
              <a class="brown-text text-lighten-3" href="http://uniceub.br">Uniceub</a>
            </div>
          </div>
        </footer>



        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
        <script>$(".dropdown-trigger").dropdown();</script>


    </body>
</html>
