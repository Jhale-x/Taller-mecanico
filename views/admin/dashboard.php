<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Dashboard</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        body {
            background: #111;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }

        /* NAVBAR */

        .navbar {
            background: #0d0d0d;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .navbar-brand {
            font-weight: bold;
            letter-spacing: 1px;
        }

        .user-box {
            background: #1f1f1f;
            padding: 8px 15px;
            border-radius: 10px;
            font-size: 14px;
        }

        /* TITULO */

        .dashboard-title h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }

        .dashboard-title p {
            color: #bdbdbd;
        }

        /* CARDS */

        .dashboard-card {
            background: #1b1b1b;
            border-radius: 18px;
            padding: 30px;
            transition: 0.3s;
            border: 1px solid rgba(255, 255, 255, 0.05);
            height: 100%;
        }

        .dashboard-card:hover {
            transform: translateY(-8px);
            border-color: #dc3545;
        }

        .icon-box {
            width: 70px;
            height: 70px;
            border-radius: 15px;
            background: linear-gradient(135deg, #dc3545, #a71d2a);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 28px;
            margin-bottom: 20px;
        }

        .dashboard-card h5 {
            color: #cfcfcf;
            margin-bottom: 10px;
        }

        .dashboard-card h2 {
            font-size: 2.5rem;
            font-weight: bold;
        }

        /* TABLE */

        .table-box {
            background: #1b1b1b;
            padding: 25px;
            border-radius: 18px;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .table {
            color: white;
        }

        .table thead {
            background: #222;
        }

        .badge-pendiente {
            background: #ffc107;
            color: black;
        }

        .badge-proceso {
            background: #0d6efd;
        }

        .badge-finalizado {
            background: #198754;
        }
    </style>

</head>

<body>

    <!-- NAVBAR -->

    <nav class="navbar navbar-dark px-4 py-3">

        <div class="container-fluid">

            <span class="navbar-brand">

                <i class="fa-solid fa-screwdriver-wrench text-danger"></i>

                Panel Administrativo

            </span>

            <div class="user-box text-white">

                <i class="fa-solid fa-user"></i>

                <?= $_SESSION['usuario']; ?>

                |

                <?= $_SESSION['rol']; ?>

            </div>

        </div>

    </nav>

    <!-- CONTENIDO -->

    <div class="container py-5">

        <!-- TITULO -->

        <div class="dashboard-title mb-5">

            <h1>
                Dashboard Taller Mecánico
            </h1>

            <p>
                Control general del sistema administrativo del taller.
            </p>

        </div>

        <!-- CARDS -->

        <div class="row g-4 mb-5">

            <div class="col-md-6 col-lg-3">

                <div class="dashboard-card">

                    <div class="icon-box">
                        <i class="fa-solid fa-users"></i>
                    </div>

                    <h5>Total Clientes</h5>

                    <h2>120</h2>

                </div>

            </div>

            <div class="col-md-6 col-lg-3">

                <div class="dashboard-card">

                    <div class="icon-box">
                        <i class="fa-solid fa-car"></i>
                    </div>

                    <h5>Vehículos</h5>

                    <h2>85</h2>

                </div>

            </div>

            <div class="col-md-6 col-lg-3">

                <div class="dashboard-card">

                    <div class="icon-box">
                        <i class="fa-solid fa-clock"></i>
                    </div>

                    <h5>Órdenes Pendientes</h5>

                    <h2>18</h2>

                </div>

            </div>

            <div class="col-md-6 col-lg-3">

                <div class="dashboard-card">

                    <div class="icon-box">
                        <i class="fa-solid fa-money-bill-wave"></i>
                    </div>

                    <h5>Pagos Recibidos</h5>

                    <h2>S/ 8K</h2>

                </div>

            </div>

        </div>

        <!-- TABLA -->

        <div class="table-box">

            <div class="d-flex justify-content-between align-items-center mb-4">

                <h4 class="mb-0">
                    Últimas Órdenes de Trabajo
                </h4>

                <button class="btn btn-danger">

                    <i class="fa-solid fa-plus"></i>

                    Nueva Orden

                </button>

            </div>

            <div class="table-responsive">

                <table class="table align-middle">

                    <thead>

                        <tr>

                            <th>#</th>
                            <th>Cliente</th>
                            <th>Vehículo</th>
                            <th>Servicio</th>
                            <th>Estado</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>001</td>
                            <td>Juan Pérez</td>
                            <td>Toyota Corolla</td>
                            <td>Cambio de aceite</td>

                            <td>
                                <span class="badge badge-pendiente">
                                    Pendiente
                                </span>
                            </td>

                        </tr>

                        <tr>

                            <td>002</td>
                            <td>Carlos Ruiz</td>
                            <td>Kia Rio</td>
                            <td>Diagnóstico</td>

                            <td>
                                <span class="badge badge-proceso">
                                    En Proceso
                                </span>
                            </td>

                        </tr>

                        <tr>

                            <td>003</td>
                            <td>María López</td>
                            <td>Hyundai Accent</td>
                            <td>Frenos</td>

                            <td>
                                <span class="badge badge-finalizado">
                                    Finalizado
                                </span>
                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</body>

</html>