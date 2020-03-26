<?php
     include('includes/db.php');
     $sql="SELECT * FROM usuarios ";
     
     $result= DB::query($sql);
 

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body align= center>
   <h1> Base de datos </h1>

    <table colspan="2" width="100%" height="100%" border = 1>
         <tr>
            <thead>
              <th>id</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Correo</th>
              <th>Estado</th>
              <th colspan="2">Acciones</th>
           </thead>      
        </tr>

    <?php
        while($mostrar= mysqli_fetch_array($result)){
          ?>

        <tr>
         <td><?php echo $mostrar['id'] ?></td>
         <td><?php echo $mostrar['nombre'] ?></td>
         <td><?php echo $mostrar['apellido'] ?></td>
         <td><?php echo $mostrar['email'] ?></td>
      
         <td class="<?= $mostrar['estado'] ?>"><?= $mostrar['estado'] ?></td>
                <input type="hidden" name="estado" value="<?= $mostrar['estado']?>">
                <td>
                <?php  if($mostrar['estado'] == "activo"){  ?>
                        <a href="guardar.php?estado=<?= $mostrar['estado']?>&id=<?= $mostrar['id']?>">Inactivar</a>
                    <?php  }else{  ?>
                        <a href="guardar.php?estado=<?= $mostrar['estado']?>&id=<?= $mostrar['id']?>">Activar</a>
                    <?php  }  ?>
                    <a href="editar.php?id=<?= $mostrar['id']?>">Editar</a>
                    </td>
        </tr>

            <?php
        }

     ?>
  
      </table>

      <input type="submit" onclick="location='crear.php'" value="Inicio">

</body>
</html>