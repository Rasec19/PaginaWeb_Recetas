<?php include("templates/header.php");?>
    <h1>Agregar una nueva receta</h1>
    <div>
        <form action="add-recipe.php" method="post">
            <label>Nombre:<input type="text" name="recipeName" id=""></label>
            <label>Tipo de receta:<select name="tipeRecipe" id="">
            <option value="1">Desayuno</option>
            <option value="2">Comida</option>
            <option value="3">Cena</option>
            <option value="4">Bebida</option>
            <option value="5">Snack</option>
            </select></label>
            <label>Ingredientes:<textarea name="ingredients" id="" cols="30" rows="10"></textarea></label>
            <label>Preparación:<textarea name="prepare" id="" cols="30" rows="10"></textarea></label>
            <input type="button" value="Agregar receta" name="register">
        </form>
    </div>
    <?php include("BD/register-newRecipe.php");?>
<?php include("templates/footer.php");?>