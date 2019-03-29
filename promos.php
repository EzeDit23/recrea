<?php

include("php/conexion.php");
include("php/sesion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>


</head>
<body>
<?php include("components/menu.php");?>



<?php

 $id_select = 1;

     
 /*USUARIOS*/
 $selectUser = "SELECT * FROM vecinos WHERE id = $id_vecino";
 $selectUser_query = mysqli_query($conexion, $selectUser);

 while($dato = mysqli_fetch_array($selectUser_query)) {
    $nombre = $dato['nombre'];
    $apellido = $dato['apellido'];
    }
    
/*AVISOS*/
 $select = "SELECT * FROM avisos WHERE id_aviso = $id_select";
 $select_query = mysqli_query($conexion, $select);

 while($dato = mysqli_fetch_array($select_query)) {
    $id_aviso = $dato['id_aviso'];
    $empresa = $dato['empresa'];
    $categoria = $dato['categoria'];
    $link = $dato['link'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recrea</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>


</head>
<body>


    <div class="container-fluid sinNada fondoPromos">
        <div class="row sinNada cont-Promo">
            <?php
                echo "<h3 class='empresa-promos'>$empresa</h3>";
            ?>
                <video id="video" width="640" height="480" class="videoPromo col-12 sinNada">
                    <source src="video/video.mp4" type="video/mp4">
                </video>
            <?php
            echo "<div class='col-12 cont-datosPromo'>";
                echo "<a href='' class='btn-irPromo'>Ir al sitio de $empresa</a>";
               
            echo "</div>";
            ?>
         
            <button class="btn-grl" href="" id="btn-espera" style="display: none;">Espere...</button>
            <a class="btn-grl" href="php/descuento_ver.php" id="btn-verPromo" style="display: none;">Continuar</a>
            <button class="btn-grl" id="btn-play" onclick="reproducir()">VER PUBLICIDAD</button>


        </div>
    </div>


    
    <script>
        $("#video").on('ended', function(){
            $("#btn-espera").css("display","none");
            $("#btn-verPromo").css("display","block");
        });
        $("#video").on('play', function(){
            $("a").css("display","red");    
        });
    </script>

    <script type="text/javascript">
        window.reproducir = function() {
            document.getElementById("video").play();
            $("#btn-espera").css("display","block");    
            $("#btn-play").css("display","none");    
        };
    </script>
</body>
</html>