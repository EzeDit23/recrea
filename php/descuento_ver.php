<?php
    
    include("conexion.php");
   

    $select="SELECT * FROM vecinos WHERE id=1";

    $select_query = mysqli_query($conexion, $select);
    
    while($dato = mysqli_fetch_array($select_query)) {
        $numero = $dato['numero'];
    }
    if ($numero == 0){
        echo "no tenes mas promos";
    } else {
        $alpha = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $code = "";
        $longitud=6;
        for($i=0;$i<$longitud;$i++){
            $code .= $alpha[rand(0, strlen($alpha)-1)];
        }

        $numerorest = $numero -1;
        $restar = "UPDATE vecinos SET numero=$numerorest WHERE id=1";
        $restar_query = mysqli_query($conexion, $restar);


        $numganador=rand(1,3);
        header("Location: ../ganador.php?numganador=$numganador&code=$code");
    }
?>