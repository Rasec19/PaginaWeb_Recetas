<?php
    #Cremos la conexión la la base de datos en este caso llamada 'recetario_bd'
    $conex = mysqli_connect('127.0.0.1', 'root', '', 'recetario_bd');

    #Modificamos o establecemos los caracteres en UTF8
    mysqli_set_charset($conex, "utf8");

    #Validación en caso de un error de conexión con la BD
    if($conex->connect_errno){
        echo "Lo sentimos, la pagina web esta mostrando problemas.";
        exit();
    }
?>