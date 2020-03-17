<?php
    include('includes/db.php');
    if(isset($_GET['id']) == false){
        echo "Es necesario enviar un id";
        die;
    }
    $id = $_GET['id'];
    $sql = "select * from usuarios where id= $id";
    $persona = DB::query($sql);
    $persona = mysqli_fetch_object($persona);
    if($persona == false){
        echo "El usuario no existe";
        die;
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

    <div>
    <form action="guardar.php" method="post">
    <input type="hidden" name="id" value="<?= $persona->id ?>">
        <table class="table" border="1">
            <body class="center">
            <tr>
            <h1>Editar usuario</h1>
            Nombres<input type="text" name="nombre" size="40" value="<?= $persona->nombre ?>">
            Apellidos<input type="text" name="apellido" size="40" value="<?= $persona->apellido ?>">
            Email<input type="text" name="email" size="40" value="<?= $persona->email?>">
            Password<input type="password" name="password" size="40" value="">
            Estado  
                <?php  if($persona->estado == "activo"){  ?>
                    <input type="radio" name="estado" value="activo" checked>Activo<br>
                    <input type="radio" name="estado" value="inactivo">Inactivo
                <?php  }else{  ?>
                    <input type="radio" name="estado" value="activo" >Activo<br>
                    <input type="radio" name="estado" value="inactivo" checked>Inactivo
                <?php  }  ?>
                
            </tr>
            <tr>
            <input type="submit" value="Guardar">
            <input type="submit" onclick="location='crear.php'" value="Inicio">
            </tr>
            </body>
        </table>
    </form>
    </div>

</body>
</html>