<?php
    $conex = mysqli_connect('127.0.0.1', 'root', '', 'recetario_bd');

    if($conex->connect_errno){
        echo "Lo sentimos, la pagina web esta mostrando problemas.";
        exit();
    }
?>