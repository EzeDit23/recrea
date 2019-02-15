<?php

session_start();
    $id_vecino = $_SESSION['id_vecino'];
    if(isset($_SESSION['id_vecino']) == true ){
        echo "SESION INICIADA<br>";
    } else {
        header("location: index.php");
    }
    