<?php
#Lamamos al encabezado de la pagina
require("../templates/header.php");
?>
    <!-- Titulos de referencia --->
    <h1>Buscar recetas</h1>

    <!--Agregamos formulario con el objetivo de buscar o mostrar recetas ya sea por el tipo o su nombre -->
    <div>
        <form action="../Views/view-recipes.php" method="POST" autocomplete="on">
            <legend>Por favor busque un receta por nombre o tipo</legend>
            <label>Buscar receta por su nombre:<input type="text" name="searchByName" id=""></label>
            <label>Buscar receta por su tipo:<select name="searchByTipe" id="">
            <option value=""></option>
            <option value="1">Desayuno</option>
            <option value="2">Comida</option>
            <option value="3">Cena</option>
            <option value="4">Bebida</option>
            <option value="5">Snack</option>
            </select></label>
            <input type="submit" value="Buscar receta" name="search">
        </form>
    </div>
    <?php
        require("../BD/conexion.php");

        if(isset($_POST['search'])){
            if(strlen($_POST['searchByName']) >= 1){
                
                $name = $_POST['searchByName'];

                $query = "SELECT * FROM recetas WHERE Nombre = '$name'";

                 $result = mysqli_query($conex,$query);

                 if($result){
                     while($row = mysqli_fetch_array($result)){
                         $data = $row;
                         echo "<h2>$data[Nombre]</h2>";
                            echo "<div>";
                                echo "<p>";
                                echo "<b>Tipo:</b>$data[Tipo];>";
                                echo "<b>Ingredientes:</b>$data[Ingredientes];>";
                                echo "<b>Preparación:</b>$data[Preparacion];>";
                                echo "</p>";
                            echo "</div>";
                        }
                    }else{
                        echo "
                        <script> 
                            alert('¡Ups ha ocurrido un error!')                        
                            location.href = '../Views/view-recipes.php'
                        </script>";
                    }
            }elseif(strlen($_POST['searchByTipe']) >= 1){
                $tipe = $_POST['searchByTipe'];

                $query = "SELECT * FROM recetas WHERE Tipo = '$tipe'";

                 $result = mysqli_query($conex,$query);

                 if($result){
                     while($row = mysqli_fetch_array($result)){
                         $data = $row;
                         echo "<h2>$data[Nombre]</h2>";
                        echo "<div>";
                            echo "<p>";
                            echo "<b>Tipo:</b>$data[Tipo];>";
                            echo "<b>Ingredientes:</b>$data[Ingredientes];>";
                            echo "<b>Preparación:</b>$data[Preparacion];>";
                            echo "</p>";
                        echo "</div>";
                     }
                    }else{
                        echo "
                        <script> 
                            alert('¡Ups ha ocurrido un error!')                        
                            location.href = '../Views/view-recipes.php'
                        </script>";
                    }
            }else{
                echo "
                <script> 
                    alert('¡Por favor ingrese algun nombre o algun tipo de receta!')                        
                    location.href = '../Views/view-recipes.php'
                </script>";
            }
        }

        require("../BD/close-conexion.php");
    ?>
<?php
#Llamamos al pie de la pagina
require("../templates/footer.php");
?>