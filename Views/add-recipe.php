<?php
//Agregamos el template de encabezado a la pagina 
require("../templates/header.php");?>
    
    <!-- Agregamos un titulo que represente la pagina --->
    <h1>Agregar una nueva receta</h1>

    <!-- Formulario con respectivos input con el cual pasaremos los datos de las recetas a la BD -->
    <div>
        <!-- Estos datos serán mandados al archiuvo 'register-newRecipe.php dentro de la carpeta 'BD' donde se ingresaran a la base de datos' -->
        <form action="../BD/register-newRecipe.php" method="POST">
            <label>Nombre:<input type="text" name="recipeName" id=""></label>
            <label>Tipo de receta:<select name="tipeRecipe" id="">
            <option value=""></option>
            <option value="1">Desayuno</option>
            <option value="2">Comida</option>
            <option value="3">Cena</option>
            <option value="4">Bebida</option>
            <option value="5">Snack</option>
            </select></label>
            <label>Ingredientes:<textarea name="ingredients" id="" cols="30" rows="10"></textarea></label>
            <label>Preparación:<textarea name="prepare" id="" cols="30" rows="10"></textarea></label>
            <input type="submit" value="Agregar receta" name="register">
        </form>
    </div>
   
<?php
#Agregamos el tamplate de footer a la pagina 
require("../templates/footer.php");?>