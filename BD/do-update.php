<!-- PHP donde se trabajar la actualización o modificación de los datos -->
<?php
    #Llamamos a la conexión con la BD
    require("conexion.php");

    #Verificamos que se clickeo el input submit
    if(isset($_POST['update'])){
        #verificamos que los inputs contengan un valor dentro
        if(strlen($_POST['updateName']) >= 1 && strlen($_POST['updateTipe']) >= 1 &&
        strlen($_POST['updateIngredients']) >= 1 && strlen($_POST['updatePrepare']) >= 1){

            #Guardamos los valores dentro de variables
            $id = $_POST['id'];
            $name = $_POST['updateName'];
            $tipe = $_POST['updateTipe'];
            $ingredients = $_POST['updateIngredients'];
            $prepare = $_POST['updatePrepare'];

            #Creamos la consulta UPDATE
            $query = "UPDATE recetas SET Nombre ='$name', Tipo = '$tipe', Preparacion = '$prepare', 
            Ingredientes = '$ingredients' WHERE ID = '$id'";

            $result = mysqli_query($conex,$query);
            
            if($result){
                echo "
                <script> 
                    alert('¡Receta modificada correctamente!')
                </script>";
                header("location: ../Views/view-recipes.php");
            }else{#En caso de lo contrario llamamos mensaje de error
                echo "
                <script> 
                    alert('¡Ups ha ocurrido un error!');
                </script>";
                header("location: ../Views/view-recipes.php");
            }
        }
    }
#Cerramos la conexión con la BD
require("close-conexion.php");
?>