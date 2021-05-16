<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="content">
    <h1>Iniciar sesión</h1>
        <form action="../BD/user-login.php" method="POST" require>
            <label>Usuario:<input type="text" name="user" id="" placeholder="Ingresar usuario"></label>
            <label>Contraseña:<input type="password" name="password" id="" placeholder="Ingressar contraseña"></label>
            <input type="submit" value="Ingresar" name="login">
            <a href="register_User.php"><label>Nuevo usuario</label></a>
        </form>
    </div>
</body>
</html>
