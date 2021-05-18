<?php
//Agregamos el template de encabezado a la pagina 
require("../templates/header.php");?>
    
    <!-- Agregamos un titulo que represente la pagina --->
    <h1 class="display-5 text-center">Agregar una nueva receta</h1>

    <!-- Formulario con respectivos input con el cual pasaremos los datos de las recetas a la BD -->
    <div class="text-center">
        <!-- Estos datos serán mandados al archiuvo 'register-newRecipe.php dentro de la carpeta 'BD' donde se ingresaran a la base de datos' -->
        <form action="../BD/register-newRecipe.php" method="POST">
        <div class="col-auto">
            <label class="col-form-label">Nombre:<input  class="form-control" type="text" name="recipeName" id=""></label>
        </div>
        <div class="col-auto">
            <label class="col-form-label">Tipo de receta:<select class="form-control" name="tipeRecipe" id="">
            <option value=""></option>
            <option value="1">Desayuno</option>
            <option value="2">Comida</option>
            <option value="3">Cena</option>
            <option value="4">Bebida</option>
            <option value="5">Snack</option>
            </select></label>
        </div>
            <label class="col-form-label">Ingredientes:<textarea class="form-control" name="ingredients" id="" cols="30" rows="10"></textarea></label> 
            <label class="col-form-label">Preparación:<textarea class="form-control" name="prepare" id="" cols="30" rows="10"></textarea></label> <br>
            <input type="submit" class="btn btn-primary" value="Agregar receta" name="register">
        </form>
    </div>
   
<?php
#Agregamos el tamplate de footer a la pagina 
require("../templates/footer.php");?>