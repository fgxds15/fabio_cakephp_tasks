<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS >
    <link href="css/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS >
    <link href="css/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts >
    <link href="css/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" -->

    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Login
    </title>

    
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
    <script type="text/javascript">
        function enviar(){
            email = document.getElementById("email").value ;
            senha = document.getElementById("senha").value ;
            if((email == "email@email.com" )&&(senha == "123456")){
                console.log("entrou");
                
            }else{
                alert("Senha ou login invalido !");
                return false ;
            }
            
            
        }
    </script>
</head>
<body class="home">
    <div class="container">
        <div class="row" style="margin-top: 15%;">
            <div class="col-md-4 col-md-offset-4">
            <h3>E-mail : email@email.com <br>
            Senha : 123456</h3>
            </div>
        </div>
        <div class="row" >
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login</h3>
                    </div>
                    <div class="panel-body">
                        <form action="tasks" role="form" onsubmit="enviar();">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" id="email" type="email" autofocus required >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Senha" id="senha" type="password" value="" required >
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Acessar" >
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
