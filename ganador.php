<?php


/*TRAEMOS NUMERO ALEATORIO GENERADO*/
$numganador=($_GET['numganador']);

echo "el numero es: $numganador";


/*CONSULTAMOS LA BASE DE DATOS*/
include("php/conexion.php");
$selectDes="SELECT * FROM descuentos WHERE id_descuento=$numganador";
$selectVec="SELECT * FROM vecinos WHERE id=1";

$select_queryDes = mysqli_query($conexion, $selectDes);
$select_queryVec = mysqli_query($conexion, $selectVec);
//NUMERO ALEATORIO
//creamos la función



while($dato = mysqli_fetch_array($select_queryDes)) {
    $id_descuento = $dato['id_descuento'];
    $codigo = $dato['codigo'];
    $nombre = $dato['nombre'];
    $porcentaje = $dato['porcentaje'];
    $empresa = $dato['empresa'];
    $categoria = $dato['categoria'];

    
    echo "<h1>$codigo </h1>";
    echo "<h1>$nombre </h1>";
    echo "<h2>$porcentaje % de descuento</h2>";
    echo "<h2>$empresa </h2>";
    echo "<h3>$categoria </h3>";
}

while($dato = mysqli_fetch_array($select_queryVec)) {
    $numero = $dato['numero'];
    if ($numero == 0){
        echo "no tenes mas promos";
    } else {
        echo "te quedan $numero promos mas este mes";
    
    }

}
