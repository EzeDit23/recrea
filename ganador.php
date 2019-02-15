<?php
/*DESDE OTRA CARPETA*/
/*OOTRO DESED VISUAL*/
/*DESDE VISUAL*/
/*TRAEMOS NUMERO ALEATORIO GENERADO*/
$pagina_anterior=$_SERVER['HTTP_REFERER'];
$numganador=($_GET['numganador']);
$code=($_GET['code']);
$desde_donde = 'http://localhost/recrea/promos.php';

echo "el numero es: $numganador";
echo "el coidgo es: $code"; 

/*CONSULTAMOS LA BASE DE DATOS*/
include("php/conexion.php");
include("php/sesion.php");

$selectDes="SELECT * FROM descuentos WHERE id_descuento=$numganador";
$selectVec="SELECT * FROM vecinos WHERE id=$id_vecino;";

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

    
    echo "<h1>$code </h1>";
    echo "<h1>$nombre </h1>";
    echo "<h2>$porcentaje % de descuento</h2>";
    echo "<h2>$empresa </h2>";
    echo "<h3>$categoria </h3>";
}

while($dato = mysqli_fetch_array($select_queryVec)) {
    $cant_des = $dato['cant_des'];
    if ($cant_des == 0){
        echo "no tenes mas promos";
    } else {
        echo "te quedan $cant_des promos mas este mes<br>";
    }
}
?>

<a href="ver_promos.php">MIS PROMOS</a>
