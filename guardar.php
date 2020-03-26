<?php
include('includes/db.php');
    if(isset($_GET['estado']) == TRUE)
    {
        $estado = $_GET['estado'];
        $id = $_GET['id'];
        if($estado=="activo"){$est = "inactivo";
        }else{$est = "activo";}
        $sql = "UPDATE usuarios set estado='$est' WHERE id='$id'";
    }else
    {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $estado = $_POST['estado'];

        if(isset($id) == false)
        {
            $estado = "activo";
            $sql = "INSERT INTO usuarios(nombre,apellido,email,password,estado) values('$nombre','$apellido','$email','$password','$estado')"; 
        
        }else
        {
            if($password != ""){$sql = "UPDATE usuarios set nombre='$nombre', apellido='$apellido',email='$email',password='$password',estado='$estado' WHERE id='$id'";
            }else{$sql = "UPDATE usuarios set nombre='$nombre', apellido='$apellido',email='$email',estado='$estado' WHERE id='$id'";}
        }
    }
    DB::query($sql);
    header('Location: index.php');
    ?>