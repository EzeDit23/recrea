
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--ICONOS P0ARA INPUT--><link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <!--ICON AWESOME--><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--BOOTSTRAP--><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/query.css">

    <title>BackOffice - Medife</title>
</head>
<body>
<?php
include("components/menu.php");
?>
    <div class="container-fluid Login sinNada">
        <div class="row sinNada cont-login">
            <div class="col-md-12 sinNada">
                <h1>VECINOS</h1>
            </div>
            
            <form class="col-md-12 sinNada login-form" action="php/confirm_login.php" method="POST">
                <input type="text" name="email" id="in-login-email" placeholder="&#xf007; Email" style="font-family:Arial, FontAwesome"><br>
                <input type="password" name="clave"  id="in-login-pass" placeholder="&#xf13e; Password" style="font-family:Arial, FontAwesome"><br>
                <input type="submit" name="enviar" id="btn-login-entrar" value="ENTRAR">
            </form>

            <div class="col-md-12 sinNada">
                <span>No tienes cuenta? <a class="btns-links" href="">REGISTRATE</a></span>
            </div>
        </div>
    </div>


</body>
</html>