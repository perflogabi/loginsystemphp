<!Doctype html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php

            if(!isset($_SESSION['login'])){
            include('login.php');
            }else{
            include('home.php');
            }
        
        ?>
    </body>
</html>