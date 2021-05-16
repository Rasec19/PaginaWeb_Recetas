<?php
#Llamamos a la conexion con la base de datos
require_once("../BD/conexion.php");

#Verificamos si se pulso el boto y que los inputs no esten en blanco
if(isset($_POST['register'])){
    if(strlen($_POST['recipeName']) >= 1 && strlen($_POST['tipeRecipe']) >= 1 &&
     strlen($_POST['ingredients']) >= 1 && strlen($_POST['prepare']) >= 1){
         #Declaramos las variables gaurdando dentro los valores correspondientes
         $name = $_POST['recipeName'];
         $tipe = $_POST['tipeRecipe'];
         $ingredients = $_POST['ingredients'];
         $prepare = $_POST['prepare'];
         
         #Creamos la consutla INSERT
         $query = "INSERT INTO recetas(Nombre,Tipo,Preparacion,Ingredientes) VALUES('$name','$tipe','$prepare','$ingredients')";
        
         #Ejecutamos un resultado mediante la conexion y el query
         $result = mysqli_query($conex,$query);
        
        #Validamos el resultado
        if($result){
            echo "
            <script> 
                alert('¡Receta agregada correctamente!')
                location.href = '../Views/add-recipe.php'
            </script>";
        }else{
            echo "
            <script> 
                alert('¡Hubo un error al ingresar su receta!')
                location.href = '../Views/add-recipe.php'
            </script>";
        }
     }else{
        echo "
        <script> 
            alert('¡Por favor ingrese todos los campos!')
            location.href = '../Views/add-recipe.php'
        </script>";
     }
}
require_once("../BD/close-conexion.php");

?>