<?php
#Llamamos a la conexión
require("conexion.php");

#Validamos que se presione el input submit
if(isset($_POST['login'])){

    #Validamos que los campos o inputs contengan datos
    if(strlen($_POST['user']) >= 1 && strlen($_POST['password']) >= 1){

        #Ingresamos los datos a variables
        $user = $_POST['user'];
        $password = $_POST['password'];
        $contador = 0;
        #Cremos query para buscar al usuario que se ingreso
        $query = "SELECT * FROM usuarios WHERE Usuario = '$user'";
        #Ejcutamos la consulta
        $result = mysqli_query($conex,$query);
        #Contamos el resultado de la consulta el cual debe ser 1
        $count = mysqli_num_rows($result);
        
        #verificamos que se alla obtenido un resultado
        if($count == 1){
            #Hacemos un array asociativo del resultado de la consulta
            while($row = mysqli_fetch_assoc($result)){
                /*Usamos la funcion password_verify para comparar la contraseña 
                ingresada con el hash que hay en la BD donde esta el usuario ingresado*/

                
                if(password_verify($password, $row['Contraseña'])){
                    #Si la contraseña coincide entonces ira al index
                    echo "
                    <script> 
                        alert('¡Inicio de sesion con exito!, Bienvenido $row[Usuario]')
                        location.href = '../Views/index.php'
                    </script>";
                }else{
                    #Si la contraseña no coincide mandara un mensaje de error
                    echo "
                    <script> 
                        alert('¡Usuario o contraseña incorrectos!')
                        location.href = '../Views/login.php'
                    </script>";
                }
            }
        }else{
            #En caso de nos encontrar resultado
            echo "
            <script> 
                alert('¡Ups ha ocurrido un error!')
                location.href = '../Views/login.php'
            </script>";
        }

    }else{
        echo "
        <script> 
            alert('¡Por favor ingrese todos los campos!')
            location.href = '../Views/login.php'
        </script>";
    }
}


#Llamamos al cierre de la conexión
require("close-conexion.php");
?>