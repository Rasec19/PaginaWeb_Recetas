<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
        <form action="../BD/add-newUser.php" method="POST" require autocomplete="off">
            <label>Usuario:<input type="text" name="newUser" id="" placeholder="Ingresar un nuevo usuario"></label>
            <label>Contraseña:<input type="password" name="newPassword" id="" placeholder="Ingresar contraseña"></label>
            <label>Confirmar Contraseña:<input type="password" name="confirmNewPassword" id="" placeholder="Confirmar contraseña"></label>
            <label>Correo:<input type="email" name="email" id="" placeholder="Ingresar correo"></label>
            <input type="submit" value="Registar" name="newRegister">
        </form>
    </div>
</body>
</html>