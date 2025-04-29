<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>introduccion a php</title>
</head>
<body>
    <h1>pagina principal del sitio</h1>
    <hp>alexis andres gil quiroga</hp>
    <!--formulario de inicio de sesion-->
    <form action="modelo/loguear.php" method = "post">
        <h2>iniciar sesion</h2>
        <label for="">E-mail:</label>
        <input type="text" name="email" id="" required>
        <br><br>
        <label for="">password:</label>
        <input type="text" name="usuario" id="" required>
        <br><br>
        <button type= "submit">Ingresar</button>
    </form>
</body>
</html>