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

    <div class="container-fluid promo sinNada">
        <div class="row sinNada main-promo">
            <video id="video" width="100%" height="auto">
                <source src="video/video.mp4" type="video/mp4">
            </video>
            <script>
                $("#video").on('ended', function(){
                    $("#btn-espera").css("display","none");
                    $("#btn-verPromo").css("display","flex");
                });
                $("#video").on('play', function(){
                    $("a").css("display","red");    
                });
            </script>
            <div class="col-md-12 sinNada promo-cont-box">   
                <?php
                echo"<h2>$nombre veni a <strong>ROPA JOVEN</strong> y encontra lo mejor de la moda para este otoño!</h2>";
                echo"<a href='https://goo.gl/maps/RDpMB1BCVu12' target='_blank'><p class='main-geo'><i class='fas fa-map-marker-alt'></i> Villa Bosch</p></a>";
                ?>
            </div>
            <div class="col-md-12 sinNada cont-btn-gral">
                <div style="display: none;" id="btn-espera" class="btn-gral-alt">
                    <a href="#none">ESPERE...</a>
                </div>
                
                <div class="btn-gral" id="btn-verPromo" style="display: none;">
                    <a href="php/descuento_ver.php">CONTINUAR</a>
                </div>
                
                
                <script type="text/javascript">
                window.reproducir = function() {
                    document.getElementById("video").play();
                    $("#btn-espera").css("display","flex");    
                    $("#btn-play").css("display","none");    
                };

                </script>
                <div class="btn-gral" id="btn-play" onclick="reproducir()">
                    <button>VER PUBLICIDAD</button>
                </div>
                
            </div>
           
        </div>
    </div>
 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>