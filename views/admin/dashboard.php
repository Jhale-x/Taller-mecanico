<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

    <nav class="navbar navbar-dark bg-dark">

        <div class="container-fluid">

            <span class="navbar-brand">
                Panel Administrativo
            </span>

            <span class="text-white">

                <?= $_SESSION['usuario']; ?>
                |
                <?= $_SESSION['rol']; ?>

            </span>

        </div>

    </nav>

    <div class="container py-5">

        <div class="row g-4">

            <div class="col-md-3">

                <div class="card shadow text-center p-4">

                    <h5>Total Clientes</h5>

                    <h2>0</h2>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card shadow text-center p-4">

                    <h5>Órdenes Pendientes</h5>

                    <h2>0</h2>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card shadow text-center p-4">

                    <h5>Servicios Finalizados</h5>

                    <h2>0</h2>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card shadow text-center p-4">

                    <h5>Pagos Recibidos</h5>

                    <h2>S/0</h2>

                </div>

            </div>

        </div>

    </div>

</body>

</html>