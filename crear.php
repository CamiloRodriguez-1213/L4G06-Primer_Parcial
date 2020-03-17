<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
</head>
<body>
    <form action="guardar.php" method="post">
        <h1>Crear Nuevo Usuario</h1>
        Nombre<input type="text" name="nombre" required placeholder="Nombre">
        Apellido</label> <input type="text" name="apellido" required placeholder="Apellido">
        Correo<input type="text" name="email" required placeholder="Email">
        Password<input type="password" name="password" required placeholder="Password">
        <input type="submit" value="Guardar">     
    </form> 
</body>
</html>