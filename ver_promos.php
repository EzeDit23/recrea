<?php
    include("php/conexion.php");
    include("php/sesion.php");

    /*datos de cupon*/
    $mostrar = "SELECT * FROM `cupones` WHERE id_vecino=$id_vecino";


    // 3. Ejecutar la query
    $mostrar_ej = mysqli_query(
                $conexion, $mostrar
                );

    // 4. Verificar si funcionó
    if($mostrar_ej == true){
        while($dato = mysqli_fetch_array($mostrar_ej)) {
            $id_cupon = $dato['id_cupon'];
            $id_vecino = $dato['id_vecino'];
            $id_descuento = $dato['id_descuento'];

        }

        echo "<h2>DATOS DE USUARIO<h2>";
        echo "<span>ID_CUPON: </span> <span>$id_cupon</span><br>";
        echo "<span>ID_VECINO: </span> <span>$id_vecino</span><br>";
        echo "<span>ID_DESCUENTO: </span> <span>$id_descuento</span><br>";
        
    } else {
        echo "ALgo pasa con el SQL";
    }

    //datos de descuento

    $mostrarDes = "SELECT * FROM `descuentos` WHERE id_descuento=$id_descuento";


    // 3. Ejecutar la query
    $query_mostrarDes = mysqli_query(
                $conexion, $mostrarDes
                );

    // 4. Verificar si funcionó
    if($query_mostrarDes == true){
        while($dato = mysqli_fetch_array($query_mostrarDes)) {
            $id_descuento = $dato['id_descuento'];
            $nombre = $dato['nombre'];

        }

        echo "<h2>DATOS DE USUARIO<h2>";
        echo "<span>ID_DESCUENTO: </span> <span>$id_descuento</span><br>";
        echo "<span>NOMBRE: </span> <span>$nombre</span><br>";
    }
        



?>
