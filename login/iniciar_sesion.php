<?PHP   session_start(); ?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fogon Parrilero</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../componentes/login.css">

</head>

<body>
    <section class="content centrar">
        <div class="container">
            <div class="row">
                
                <div class="col d-flex flex-column justify-content-center align-items-center mt-4">

                    <figure class="bg-light rounded-circle  w-25">
                        <img class="img-fluid" src="../img/logo-login.png" alt="logo de session">
                    </figure>

                    <form action="login.php" method="post">
                        <div class="form-group">

                            <input type="email" class="form-control" id="email"  name="email" placeholder="Usuario">
                        </div>
                        <div class="form-group mt-4">
                            <input type="password" class="form-control" id="password" name="password"  placeholder="contraseña">
                        </div>
                        <div class="text-center mt-4">
                            <button class="btn btn-primary" type="sumit">Iniciar Sesion</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <script src="../js/bootstrap.min.js"></script>
</body>

</html>