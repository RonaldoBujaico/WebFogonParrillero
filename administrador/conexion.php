<?php 

$host_name = 'localhost';
$user_name = 'root';
$password = 'abc123$';
$database = 'dbfogonparrillero';

try {
   $conexion  = new PDO("mysql:host=$host_name;dbname=$database",$user_name,$password);
    
} catch (PDOException $e) {
    echo "Hubo un error en la conexio".$e->getMessage();

}


