<?php session_start() ?>
<!Doctype html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php

            if(!isset($_SESSION['login'])){
                if(isset($_POST['acao'])){
                $login = 'guilherme';
                $senha = '123456';

                $loginForm = $_POST['login'];
                $senhaForm = $_POST['senha'];

                if($login == $loginForm && $senha == $senhaForm){
                    //logado com sucesso!
                    $_SESSION['login'] = $login;
                    header('location: index.php');
                }else{
                    //Algum erro ocorreu.
                    echo 'Dados Inválidos.';
                }
            }
            
            include('login.php');
            }else{
                if(isset($_GET['logout'])){
                unset($_SESSION['login']);
                session_destroy();
                header('Location: index.php');
                }
            include('home.php');
            }
        
        ?>
    </body>
</html>