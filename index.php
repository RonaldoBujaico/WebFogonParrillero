<?php
    session_start();


    if(isset($_SESSION['admin'])){
        echo 'bienvenido '.$_SESSION['admin'];
        echo '<br><a href="login/cerrar_sesion.php">Cerrar Session</a>';
    }else{
        header('location:login/iniciar_sesion.php');
    }

    

?>



    
