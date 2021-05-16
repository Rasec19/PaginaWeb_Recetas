<?php
#Llamamos a la conexion con la base de datos
require("../BD/conexion.php");

#Validamos que el boton sea pulsado
if(isset($_POST['newRegister'])){

    #Validamos que los campos contengan datos
    if(strlen($_POST['newUser']) >1 && strlen($_POST['newPassword']) >= 1 && 
    strlen($_POST['confirmNewPassword']) >= 1 && strlen($_POST['email']) >= 1){
        
        #Asignamos los datos a variables
        $user = $_POST['newUser'];
        $password = $_POST['newPassword'];
        $confirmPassword = $_POST['confirmNewPassword'];
        $email = $_POST['email'];

        #Validamos que la contraseña y la confirmación de contraseña coincidan
        if($password === $confirmPassword){

            #Encriptamos la contraseña
            $password_encrypt = password_hash($password, PASSWORD_DEFAULT);

            #Creamos la consulta INSERT
            $query = "INSERT INTO usuarios(Usuario,Contraseña,Correo) VALUES('$user','$password_encrypt','$email')";

            #Ejcutamos el query
            $result = mysqli_query($conex,$query);

            #Validamos resultado
            if($result){
                echo "
            <script> 
                alert('¡Usuario registrado con exito!')
                location.href = '../Views/login.php'
            </script>";
            }else{
                echo "
            <script> 
                alert('¡Ups hubo un error!')
                location.href = '../Views/register_User.php'
            </script>";
            }
        }else{
            #En caso de que la contraseña y el confirmar contraseña no coincidan
            echo "
            <script> 
                alert('¡La contraseña ingresado no coincide!')
                location.href = '../Views/register_User.php'
            </script>";
        }
    }else{
        #En caso de que no se alla ingresado un campo
        echo "
            <script> 
                alert('¡Por favor ingrese todos los campos!')
                location.href = '../Views/register_User.php'
            </script>";
    }
}


#Cerramos conexión con la BD
require("../BD/close-conexion.php");

?>