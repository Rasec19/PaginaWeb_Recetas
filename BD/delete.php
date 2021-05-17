<?php
#Llamos a la conexión con la BD
require("conexion.php");
#Capturamos el ID enviado por metodo GET en una variable
$id = $_GET['ID'];
#Creamos un consulta DELETE
$query = "DELETE FROM recetas WHERE ID = '$id'";
#Ejecutamos la consulta
$result = mysqli_query($conex,$query);

#Verificamos que la consulta alla sido exitosa
if($result){
    echo "
    <script> 
        alert('¡La receta ha sido eliminada con exito!')
    </script>";
    header("Location: ../Views/view-recipes.php");
}else{
    echo "
    <script> 
        alert('¡Ha ocurrido un error!')
    </script>";
    header("Location: ../Views/view-recipes.php");
}

#Cerramos la conexión con la BD
require("close-conexion.php");
?>