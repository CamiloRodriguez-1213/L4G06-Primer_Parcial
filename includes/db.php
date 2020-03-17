<?php 

class DB {

    //Datos de conexión
    static $host = "YOUR_HOST";
    static $user = "YOUR_USER";
    static $password = "YOUR_PASSWORD";
    static $db = "YOUR_DATABASE";

    public static function query($sql){
        //Crear la conexión
        $con = new mysqli(self::$host, self::$user, self::$password, self::$db);
        
        $result = $con->query($sql); 
        
        $con->close();

        return $result;
        
        //aca no se ejecuta nada
    }
}

?>