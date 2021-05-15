<?php
#Llamamos a la conexion con la base de datos
include("BD/conexion.php");

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
         $query = "INSERT INTO recetas(Nombre,Tipo,Preparacion,Ingredientes) VALUES($name,$tipe,$prepare,$ingredients)";
        
         #Ejecutamos un resultado mediante la conexion y el query
         $result = mysqli_query($conex,$query);
        
        #Validamos el resultado
        if($result){
            ?>
            <h3 class="ok">¡Receta agregada correctamente!</h3>
            <?php
        }else{
            ?>
            <h3 class="bad">¡Ups ha ocurrido un error!</h3>
            <?php
        }
     }else{
         ?>
        <h3>¡Por favor complete los campos!</h3>
        <?php
     }
}
include("BD/close-conexion.php");

?>