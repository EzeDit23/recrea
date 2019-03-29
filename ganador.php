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


$numganador=($_GET['numganador']);
$code=($_GET['code']);




/*CONSULTAMOS LA BASE DE DATOS*/
$selectDes="SELECT * FROM descuentos WHERE id_descuento=$numganador";
$selectVec="SELECT * FROM vecinos WHERE id=$id_vecino;";

$select_queryDes = mysqli_query($conexion, $selectDes);
$select_queryVec = mysqli_query($conexion, $selectVec);
?>
    <div class="container-fluid sinNada fondoGanador">
        <div class="row sinNada">
            <div class="col-12">
                <h2 class="tit-feliz"><i class="fas fa-gift"></i> FELICITACIONES</h2>
            </div>
        </div>

        <div class="col-12 contenedor sinNada">
        <div class="toda-tarjeta">
            <div class="main-cupon">
                <span>CUPON</span><span style="font-weight:normal;"><?php echo $code;?></span>
            </div class="toda-tarjeta">
                <div class="tarjeta">
                    <div class="contenido-cupon">

    
<?php
while($dato = mysqli_fetch_array($select_queryDes)) {
    $id_descuento = $dato['id_descuento'];
    $codigo = $dato['codigo'];
    $nombre = $dato['nombre'];
    $porcentaje = $dato['porcentaje'];
    $empresa = $dato['empresa'];
    $categoria = $dato['categoria'];

    
    echo "<h1 class='tit-cupon'>$nombre </h1>";   
    echo "<h1 class='code-cupon'>$code </h1>";
  
    echo "<h2 class='porc-cupon'>$porcentaje% de descuento</h2>";
    echo "<h2 class='empresa-cupon'>$empresa </h2>";

    while($dato = mysqli_fetch_array($select_queryVec)) {
            $nombreVec = $dato['nombre'];
            $apellido = $dato['apellido'];
            $cant_des = $dato['cant_des'];
            
        if ($cant_des == 0){
            $teQuedan = "<span class='txt-quedan'>No te quedan mas descuentos este mes</span>";
        } 
        else {
            $teQuedan = "<span class='txt-quedan'>te quedan $cant_des descuentos mas este mes</span>";
        }
    }
    ?>

    <div class="cont-datos">
        <div class="items-datos">
            <span class="item-tit-datos">Nombre</span>
            <span><?php echo $nombreVec;?></span>
        </div>
        <div class="items-datos">
            <span class="item-tit-datos">Apellido</span>
            <span><?php echo $apellido;?></span>
        </div>
        <div class="items-datos">
            <span class="item-tit-datos">DNI</span>
            <span><?php echo $nombreVec;?></span>
        </div>
    </div>
    

<?php
}


?>
            </div>
            </div>
            </div>
            <?php
            echo $teQuedan;
            ?>
            <a href="ver_cupones.php" class="btn-grl">MIS CUPONES</a>
        </div>
        

    
</div>


</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>