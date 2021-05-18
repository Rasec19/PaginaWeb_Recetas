<?php
#Lamamos al encabezado de la pagina
require("../templates/header.php");
?>
    <!-- Titulos de referencia --->
    <h1 class="display-4 text-center">Buscar recetas</h1>

    <!--Agregamos formulario con el objetivo de buscar o mostrar recetas ya sea por el tipo o su nombre -->
    <div class=" text-center">
        <form action="../Views/view-recipes.php" method="POST" autocomplete="on">
            <legend class="display-6 texte-center">Por favor busque un receta por nombre o tipo</legend>
            <div class="col-auto">
            <label class="col-form-label">Buscar receta por su nombre:<input class="form-control" type="text" name="searchByName" id=""></label>
            </div>
            <div class="col-auto">
            <label class="col-form-label">Buscar receta por su tipo:<select class="form-control" name="searchByTipe" id="">
            <option value=""></option>
            <option value="1">Desayuno</option>
            <option value="2">Comida</option>
            <option value="3">Cena</option>
            <option value="4">Bebida</option>
            <option value="5">Snack</option>
            </select></label>
            </div>
            <input type="submit" class="btn btn-primary" value="Buscar receta" name="search">
        </form>
    </div>
    
    <!-- Aqui desarrollaremos el PHP para mostrar los datos de recetas que hay en la BD -->
    <?php
        #Llamamos a la conexión con la BD
        require("../BD/conexion.php");

        #Verificamos que se clickeo el input submit
        if(isset($_POST['search'])){
            #Verificamos que el input del nombre contenga algun dato
            if(strlen($_POST['searchByName']) >= 1){
                
                #Cremos una variable a la que le insertamos el dato del input
                $name = $_POST['searchByName'];
                #Cremos la consulta SELECT
                $query = "SELECT * FROM recetas WHERE Nombre = '$name'";
                #Ejcutamos la consulta
                 $result = mysqli_query($conex,$query);
                #Verificamos si la consulta nos arroja algun resultado si es asi se ejecutara el IF
                 if($result){
                        #Cremos un array del resultado de la consulta
                     while($row = mysqli_fetch_array($result)){
                        #Igualamos este resultado a una variable
                         $data = $row;
                         ?>
                         <!-- Mostramos los datos con estructura HTML -->
                         <h2><?php echo "$data[Nombre]";?></h2>
                         <div>
                            <p>
                                <b>Tipo:</b><?php echo "$data[Tipo]"?>
                                <b>Ingredientes:</b><?php echo "$data[Ingredientes]"?>
                                <b>Preparación:</b><?php echo "$data[Preparacion]"?>
                            </p>
                            <div> <!-- Link con los cuales se modificara o eliminara recetas -->
                                <a href="../BD/update.php?ID=<?php echo $data['ID'];?>;" class="item-link-update">Modificar receta</a>
                                <a href="../BD/delete.php?ID=<?php echo $data['ID'];?>;" class="item-link-delete">Eliminar receta</a>
                            </div>
                         </div>
                            <?php
                        }
                        #Liberamos la memoria
                        mysqli_free_result($result);
                    }else{#Mensaje de error en caso de necesitarse
                        echo "
                        <script> 
                            alert('¡Ups ha ocurrido un error!')                        
                            location.href = '../Views/view-recipes.php'
                        </script>";
                    } #Aqui validamos con ELSEIF si se usa la opcion de buscar por tipo en vez de por nombre
            }elseif(strlen($_POST['searchByTipe']) >= 1){
                #Guardamos el tipo que se busca en una variable
                $tipe = $_POST['searchByTipe'];
                #Cremos la consulta SELECT
                $query = "SELECT * FROM recetas WHERE Tipo = '$tipe'";
                #Ejecutamos la consulta
                 $result = mysqli_query($conex,$query);
                #Verificamos que consulta arroje un resultado
                 if($result){
                     #Cremos un array del resultado de la consulta
                     while($row = mysqli_fetch_array($result)){
                         #Guardamos este array en una variable
                         $data = $row;
                         ?>
                         <!-- Mostramos los datos con estructura HTML -->
                         <h2><?php echo "$data[Nombre]";?></h2>
                         <div>
                            <p>
                                <b>Tipo:</b><?php echo "$data[Tipo]"?>
                                <b>Ingredientes:</b><?php echo "$data[Ingredientes]"?>
                                <b>Preparación:</b><?php echo "$data[Preparacion]"?>
                            </p>
                            <div> <!-- Link con los cuales se modificara o eliminara recetas -->
                                <a href="../BD/update.php?ID=<?php echo $data['ID'];?>" class="item-link-update">Modificar receta</a>
                                <a href="../BD/delete.php?ID=<?php echo $data['ID'];?>;" class="item-link-delete">Eliminar receta</a>
                            </div>
                         </div>
                         <?php
                     }
                     #Liberamos memoria
                     mysqli_free_result($result);
                    }else{ #ELSE con un mensaje ALERT en caso de un error
                        echo "
                        <script> 
                            alert('¡Ups ha ocurrido un error!')                        
                            location.href = '../Views/view-recipes.php'
                        </script>";
                    }
            }else{ #mensaje ALERT en caso de no se introduzcan datos a alguno de los inputs
                echo "
                <script> 
                    alert('¡Por favor ingrese algun nombre o algun tipo de receta!')                        
                    location.href = '../Views/view-recipes.php'
                </script>";
            }
        }
        #Cerramos la conexión con la BD
        require("../BD/close-conexion.php");
    ?>
<?php
#Llamamos al pie de la pagina
require("../templates/footer.php");
?>