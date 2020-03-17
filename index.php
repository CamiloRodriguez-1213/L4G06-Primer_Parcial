<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div>
        <h1>
            Listado de Usuarios
            <a href="">Nuevo</a>
        </h1>

    </div>

    <div>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
            </thead>

            <tbody class="center">
            <!--Datos de Ejemplo : Borrar esta información-->
            <tr>
                <td>1</td>
                <td>Jeyson</td>
                <td>Calvache</td>
                <td>jeison130@gmail.com</td>
                <td class="activo">Activo</td>
                <td>
                    <a href="">Inactivar</a>
                    <a href="">Editar</a>
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td>Juan</td>
                <td>Perez</td>
                <td>juanperez@gmail.com</td>
                <td class="inactivo">Inactivo</td>
                <td>
                    <a href="">Activar</a>
                    <a href="">Editar</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>