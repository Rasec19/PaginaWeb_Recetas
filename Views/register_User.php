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
    <h1 class="display-5">Registrar nuevo usuario</h1>
        <form action="../BD/add-newUser.php" method="POST" require autocomplete="off">
        <div class="">
        <div class="col-auto">
            <label for="user" class="col-form-label">Usuario:<input type="text" class="form-control" name="newUser" id="user" placeholder="Ingresar un nuevo usuario"></label>
        </div>
        <div class="col-auto">
            <label class="col-form-label">Contraseña:<input type="password" class="form-control" name="newPassword" id="" placeholder="Ingresar contraseña"></label>
        </div>
        <div class="col-auto">
            <label class="col-form-label">Confirmar Contraseña:<input type="password"  class="form-control"name="confirmNewPassword" id="" placeholder="Confirmar contraseña"></label>
        </div>
        <div class="col-auto">
            <label class="col-form-label">Correo:<input type="email" class="form-control" name="email" id="" placeholder="Ingresar correo"></label>
        </div>    
            <input type="submit" value="Registar" class="btn btn-success" name="newRegister">
        </div>
        </form>
</body>
</html>