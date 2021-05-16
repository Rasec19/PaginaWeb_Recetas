<?php
#Lamamos al encabezado de la pagina
require("../templates/header.php");
require("../BD/conexion.php");
?>
    <!-- Titulos de referencia --->
    <h1>Buscar recetas</h1>

    <!--Agregamos formulario con el objetivo de buscar o mostrar recetas ya sea por el tipo o su nombre -->
    <div>
        <form action="../BD/search-recipes.php" method="POST">
            <label>Buscar receta por su nombre:<input type="text" name="searchByName" id=""></label>
            <label>Buscar receta por su tipo:<select name="searchByTipe" id="">
            <option value=""></option>
            <option value="1">Desayuno</option>
            <option value="2">Comida</option>
            <option value="3">Cena</option>
            <option value="4">Bebida</option>
            <option value="5">Snack</option>
            </select></label>
            <input type="submit" value="Buscar receta" value="search">
        </form>
    </div>
    <?php
    ?>
<?php
#Llamamos al pie de la pagina
require("../templates/footer.php");
require("../BD/close-conexion.php");
?>