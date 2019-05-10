<?php
include "config.php";


if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);


    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from funcionarios where LOGIN='".$uname."' and SENHA='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: index.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>
<html>
    <head>
        <title>Login Sigpet</title>
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
          <h3>Sigpet</h3>
          <div class="col s12 z-depth-6 card-panel">
            <form method="post" action="">
              <div class="row margin">
                <div id="div_login">
                    <div class="input-field col s12">
                      <i class="mdi-social-person-outline prefix"></i>
                        <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Login" />
                    </div>
                  </div>
                    <div class="input-field col s12">
                      <i class="mdi-social-person-outline prefix"></i>
                        <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Senha"/>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input  type="submit" class="btn waves-effect waves-light col s12" value="Entrar" name="but_submit" id="but_submit" />
                      </div>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </body>
</html>
