<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container text-center">
    <h1 class="display-5">Iniciar sesión</h1>
        <div class="">
            <form action="../BD/user-login.php" method="POST" require autocomplete="off">
                <div class="col-auto">
                    <label class="col-form-label">Usuario:<input type="text" class="form-control" name="user" id="" placeholder="Ingresar usuario"></label>
                </div>
                <div class="col-auto">
                    <label class="col-form-label">Contraseña:<input type="password" class="form-control" name="password" id="" placeholder="Ingresar contraseña"></label>
                </div>
                    <input type="submit" class="btn btn-success" value="Ingresar" name="login">
                    <a href="register_User.php" class="btn btn-primary"><label>Nuevo usuario</label></a>
            </form>
        </div>
</body>
</html>
