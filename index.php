<?php
//Conexion a base de datos
include('conexion/conexion.php');
$link = Conectarse();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Alpha | Login</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.css" rel="stylesheet"> 
        <link href="css/login.css" rel="stylesheet"> 

        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/valLogin.js"></script>

    </head>
    <body> 

        <div class="container">
            <br><br> <!-- XD -->
            <div id="alineacion_titulo"><span class="titulo">Login</span></div>
            <form method="post" action="login.php" id="form_login">

                <input type="email" name="email" id="email" class="input" placeholder="email">
                <div id="error1"></div>
                <input type="password" name="pass" id="pass" class="input" placeholder="password">
                <div id="error2"></div>
                <input type="submit" class="btn btn-inverse" id="login-btn" value="Login"  onclick="return validarLogin()" />
            </form>
            <div id="mensaje"></div>
        </div>
    </body>   
</html>

