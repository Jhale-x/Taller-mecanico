<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Solicitar Servicio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-white">

    <div class="container py-5">

        <div class="card p-4 shadow">

            <h2 class="text-center mb-4 text-dark">
                Solicitar Atención
            </h2>

            <form action="../../controller/SolicitudController.php" method="POST">

                <h4 class="text-dark">
                    Datos del Cliente
                </h4>

                <input type="text" name="nombre" class="form-control mb-3" placeholder="Nombre completo" required>

                <input type="text" name="dni" class="form-control mb-3" placeholder="DNI" required>

                <input type="text" name="telefono" class="form-control mb-3" placeholder="Teléfono" required>

                <input type="email" name="correo" class="form-control mb-4" placeholder="Correo" required>

                <h4 class="text-dark">
                    Datos del Vehículo
                </h4>

                <input type="text" name="marca" class="form-control mb-3" placeholder="Marca" required>

                <input type="text" name="modelo" class="form-control mb-3" placeholder="Modelo" required>

                <input type="text" name="placa" class="form-control mb-3" placeholder="Placa" required>

                <input type="text" name="anio" class="form-control mb-4" placeholder="Año" required>

                <h4 class="text-dark">
                    Servicio
                </h4>

                <select name="servicio" class="form-select mb-3">

                    <option>Cambio de aceite</option>
                    <option>Revisión de frenos</option>
                    <option>Alineación</option>
                    <option>Balanceo</option>
                    <option>Diagnóstico computarizado</option>

                </select>

                <input type="date" name="fecha_deseada" class="form-control mb-3" required>

                <textarea name="descripcion" class="form-control mb-4" rows="5" placeholder="Descripción del problema"></textarea>

                <button class="btn btn-danger w-100">
                    Registrar Solicitud
                </button>

            </form>

        </div>

    </div>

</body>

</html>