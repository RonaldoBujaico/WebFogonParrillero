<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FogonParrillero</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../componentes/header.css">
</head>

<body>
    <div class="container-fluid d-flex flex-column ">
        <div class="row flex-nowrap">
            <div class="bg-light col-auto col-md-4 col-lg-2 px-0 d-flex flex-column justify-content-between min-vh-100">
                <div class="d-flex align-items-center justify-content-center py-3">
                    <a href="index.php">
                        <img class="img-fluid" src="../img/logo-login.png" alt="logotipo">
                    </a>
                </div>
                <ul class="nav nav-list  mt-4  mb-auto">
                    <li class="nav-item pb-2">
                        <a href="#" class="nav-link text-dark d-flex align-items-center">
                            <i class="fs-5 bi bi-cart-fill me-2"></i>
                            <span class="fs-5 d-none d-md-inline">Ventas</span>
                        </a>
                    </li>
                    <li class="nav-item pb-2">
                        <a href="#" class="nav-link text-dark d-flex align-items-center">
                            <i class="fs-5 bi bi-archive-fill me-2"></i>
                            <span class="fs-5 d-none d-md-inline">Productos</span>
                        </a>
                    </li>
                    <li class="nav-item pb-2">
                        <a href="#" class="nav-link text-dark d-flex align-items-center">
                            <i class="fs-5 bi bi-box2-fill me-2"></i>
                            <span class="fs-5 d-none d-md-inline">Insumos</span>
                        </a>
                    </li>
                    <li class="nav-item pb-2">
                        <a href="#" class="nav-link text-dark d-flex align-items-center">
                            <i class="fs-5 bi bi-kanban me-2"></i>
                            <span class="fs-5 d-none d-md-inline">Reportes</span>
                        </a>
                    </li>
                </ul>
                <div class="container-fluid d-flex flex-column align-self-end  p-3">
                    <?php
                    session_start();

                    if (isset($_SESSION['admin'])) {
                        echo '<div class="d-flex align-items-center">';
                        echo 'Bienvenido ' . $_SESSION['admin'];
                        echo '</div>';
                        echo '<a class="btn btn-primary mt-2" href="../login/cerrar_sesion.php">Cerrar Sesión</a>';
                    } else {
                        header('location:../login/iniciar_sesion.php');
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>