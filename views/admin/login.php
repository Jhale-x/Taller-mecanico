<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-dark">

    <div class="container">

        <div class="row vh-100 justify-content-center align-items-center">

            <div class="col-md-4">

                <div class="card p-4 shadow">

                    <h2 class="text-center mb-4">
                        Iniciar Sesión
                    </h2>

                    <form action="../../controller/LoginController.php" method="POST">

                        <input type="email"
                            name="correo"
                            class="form-control mb-3"
                            placeholder="Correo"
                            required>

                        <input type="password"
                            name="password"
                            class="form-control mb-4"
                            placeholder="Contraseña"
                            required>

                        <button class="btn btn-danger w-100">
                            Ingresar
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</body>

</html>