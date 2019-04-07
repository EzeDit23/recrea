<?php

$sw_estado = "si";

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

<?php
include("components/menu.php");
?>

<?php
    /*datos de cupon*/
    $mostrar = "SELECT * FROM `cupones` WHERE id_vecino=$id_vecino and estado='no'";
    // 3. Ejecutar la query
    $mostrar_ej = mysqli_query(
                $conexion, $mostrar
                );
    ?>
     <div class="container-fluid sinNada fondoVerCupon">
         <div class="row sinNada cont-switch-vc" id="btn-active">
            <div class="col-6 sinNada">
                <a href="ver_cupones_active.php"><div class="btn-swich inactive">
                    <h2>Activas</h2>
                </div></a>
            </div>
            <div class="col-6 sinNada">
                <a href="ver_cupones_inactive.php"><div class="btn-swich active " id="btn-inactive">
                    <h2>Inactivas</h2>
                </div></a>
            </div>
         </div>

         <div class="cont-vercupones">
            <div class="row sinNada">
    <?php

        while($dato = mysqli_fetch_array($mostrar_ej)) {
            $id_cupon = $dato['id_cupon'];
            $id_vecino = $dato['id_vecino'];
            $id_descuento = $dato['id_descuento'];
            $estado = $dato['estado'];

            $estadoCss = "";

            if($estado = "no"){
                echo "<a href='cupon.php?id_cupon=$id_cupon' class='col-12 sinNada classMostrar'>";
                echo "<div class='cupon-item'>";
         
                $mostrarCup = "SELECT * FROM `cupones` WHERE id_cupon=$id_cupon";
                // 3. Ejecutar la query
                $query_mostrarCup = mysqli_query(
                            $conexion, $mostrarCup
                            );
  
                // 4. Verificar si funcionó
                if($query_mostrarCup == true){
                    while($dato = mysqli_fetch_array($query_mostrarCup)) {
                        $id_cupon = $dato['id_descuento'];
                        $codigo = $dato['codigo'];
                      
                    }
                }

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
                        $porcentaje = $dato['porcentaje'];
                        $empresa = $dato['empresa'];
                            echo "<span class='tit-codigo'><b>CODIGO:</b> $codigo</span><br>";
                            echo "<div class='linea-cupon'></div>";
                            echo "<span class='nombre-cupon'>$nombre<br>$empresa</span><br>";
                            echo "<p class='porcentaje-cupon'>$porcentaje% de descuento</p>";
                        echo "</div>";
                        echo "</a>";
                    }
                }
            
            }
        
    }

    //datos de descuento

?>
        </div>
     </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
  </body>