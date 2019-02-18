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
    <title>Document</title>
</head>
<body>
<?php

    include("components/menu.php");

?>



<?php

    $id_cupon=($_GET['id_cupon']);
    /*datos de cupon*/
    $mostrar = "SELECT * FROM `cupones` WHERE id_cupon=$id_cupon";

    echo "ESTAS EN EL CUPON CON ID: $id_cupon";
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
            $codigo = $dato['codigo'];
            
            echo "<a href='cupon.php'>";
            echo "<div style='background-color: red; width:50%; font-size='12px; text-decoration-style:none!important;'>";
            echo "<h2>DATOS DE CUPON</h2>";
            echo "<span>CODIGO: </span> <span>$codigo</span><br>";
            echo "<span>ID_CUPON: </span> <span>$id_cupon</span><br>";
            echo "<span>ID_VECINO: </span> <span>$id_vecino</span><br>";
            echo "<span>ID_DESCUENTO: </span> <span>$id_descuento</span><br>";

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
                    $empresa = $dato['empresa'];
                    
        
                    echo "<h2>DATOS DE DESCUENTO</h2>";
                    echo "<span>ID_DESCUENTO: </span> <span>$id_descuento</span><br>";
                    echo "<span>NOMBRE: </span> <span>$nombre</span><br>";
                    echo "<span>empresa: </span> <span>$empresa</span><br>";
                    echo "</div>";
                    echo "</a>";
                }
        
              
            }
                
        }   
    } else {
        echo "ALgo pasa con el SQL";
    }

    //datos de descuento





?>
</body>
</html>