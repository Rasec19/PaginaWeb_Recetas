<?php
#Llamamos a la conexión con la BD
require("conexion.php");

#Validamos si se clickeo el input submit 
if(isset($_POST['search'])){
    #Validamos si el input text es mayor o igual a 1 caracter o si el input select es mayor o igual a 1 caracter
    if(strlen($_POST['searchByName']) >= 1 || strlen($_POST['searchByTipe']) >= 1){

        #Creamos variables para guardar los datos del formulario
        $searchName = $_POST['searchByName'];
        $searchTipe = $_POST['searchByTipe'];

        #Cremos la consulta SELECT para buscar los datos
        $query = "SELECT * FROM recetas WHERE Nombre = '$searchName' OR  Tipo = '$searchTipe'";


        #Ejecutamos la consutla y la guardamos en una variable resultado
        $result = mysqli_query($conex,$query);

       
           while($row = mysqli_fetch_assoc($result)){
               echo $row["Nombre"];
               echo $row["Tipo"];
               echo $row["Ingredientes"];
               echo $row["Preparacion"];
           }
       
    }
}

#Cerramos la conexión con la BD
require("close-conexion.php");
?>