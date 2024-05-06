<?php 

    include_once '../administrador/conexion.php';

    session_start();
    

    $email_login = $_POST['email'];
    $password_login = $_POST['password'];


    //Verificamos si el usuario existe

    $query = 'SELECT * FROM usuario WHERE correo = ?';
    $sentencia = $conexion->prepare($query);
    $sentencia->execute(array($email_login));
    $resultado = $sentencia->fetch();


    if(!$resultado){
        echo '<script> alert ("Usuario no existe"); </script>';
        echo '<script> window.location.href = "iniciar_sesion.php"; </script>';
       
        die();
    }

    var_dump($password_login);

    if($password_login ==  $resultado['contraseña']){
        $_SESSION['admin'] = $resultado['nombre'];
        header('location:../index.php');
    }else{
        echo 'Contraseña incorrenta';
        die();
    }


    
   




?>