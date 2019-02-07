<?php
 include("php/conexion.php");
 $id_select = 2;
    
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


    
    <video id="video" width="640" height="480" controls autoplay>
        <source src="video/video.mp4" type="video/mp4">
    </video>
    <script>
        $("#video").on('ended', function(){
            $("#btn-espera").css("display","none");
            $("#btn-verPromo").css("display","block");
	    });
        $("#video").on('play', function(){
            $("a").css("display","red");    
	    });
    </script>
    <?php
    echo"<h2>$categoria</h2>";
    echo"<h3>$empresa</h3>";
    ?>
    <a href="" id="btn-espera" style="display: none;">Espere</a>
    <a href="" id="btn-verPromo" style="display: none;">Continuar</a>
    
    <script type="text/javascript">
    window.reproducir = function() {
        document.getElementById("video").play();
        $("#btn-espera").css("display","block");    
        $("#btn-play").css("display","none");    
    };

    </script>
    <button id="btn-play" onclick="reproducir()">VER PUBLICIDAD</button>

 
</body>
</html>