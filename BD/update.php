<?php
#Llammos a la conexión con la BD
require("conexion.php");
#llamamos al encabezado de la pagina
require("../templates/header.php");
?>

<!--- PHP con el que capturaremos la seleccion del dato a modificar por su ID -->
<?php
#Capturaremos el ID en una variable
$id = $_GET['ID'];

#Creremos query para mostrar el dato que se modificara
$query = "SELECT * FROM recetas WHERE ID = '$id'";
#Ejecutamos la consulta
$result = mysqli_query($conex,$query);
#Verificamos que el resultado sea correcto
if($result){
    #Cremos array con el resultado de la consulta
    $row = mysqli_fetch_array($result);
}else{#En caso de ser contrario se llamara un alert
    echo "
    <script> 
        alert('¡Ups ha ocurrido un error!')
        location.href = ../Views/view-recipes.php 
    </script>";
}
?>
<!-- TItulos de significado de la pagina -->
<h1 class="display-4 text-center">Modificar recetas</h1>
<!--- Contenedor del formulario -->
<div class="text-center">
    <!-- Utilizaremos el array con los datos para insertarlos en este forulario, en donde se podran actualizar --->
    <form action="do-update.php" method="POST" autocomplete="off">
            <input  type="hidden" name="id" value="<?php echo $row["ID"]?>">
            <div class="col auto">
            <label class="col-form-label">Nombre:<input class="form-control" type="text" name="updateName" id="" value="<?php echo $row["Nombre"];?>"></label>
            </div>
            <div class="col auto">
            <label class="col-form-label">Tipo de receta:<select class="form-control" name="updateTipe" id="">
            <option value="<?php echo $row['Tipo'];?>">Tipo por defecto</option>
            <option value="1">Desayuno</option>
            <option value="2">Comida</option>
            <option value="3">Cena</option>
            <option value="4">Bebida</option>
            <option value="5">Snack</option>
            </select></label>
            </div>
            <label class="col-form-label">Ingredientes:<textarea class="form-control" name="updateIngredients" id="" cols="30" rows="10"><?php echo $row['Ingredientes'];?></textarea></label>
            <label class="col-form-label">Preparación:<textarea class="form-control" name="updatePrepare" id="" cols="30" rows="10"><?php echo $row['Preparacion'];?></textarea></label><br>
            <input type="submit" class="btn btn-primary" value="Modificar receta" name="update">
    </form>
</div>
<?php
require("../templates/footer.php");
require("close-conexion.php");
?>