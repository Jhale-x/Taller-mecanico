<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Taller Mecánico</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        body {
            background: linear-gradient(135deg, #111, #1f1f1f, #2d2d2d);
            height: 100vh;
            overflow: hidden;
            font-family: Arial, Helvetica, sans-serif;
        }

        .login-box {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .logo {
            width: 90px;
            height: 90px;
            background: #dc3545;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: auto;
            margin-bottom: 20px;
            color: white;
            font-size: 35px;
            box-shadow: 0px 0px 20px rgba(220, 53, 69, 0.6);
        }

        h2 {
            color: white;
            font-weight: bold;
        }

        p {
            color: #cfcfcf;
            font-size: 14px;
        }

        .form-control {
            height: 50px;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.08);
            border: none;
            color: white;
        }

        .form-control::placeholder {
            color: #d1d1d1;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.12);
            color: white;
            box-shadow: none;
            border: 1px solid #dc3545;
        }

        .input-group-text {
            background: rgba(255, 255, 255, 0.08);
            border: none;
            color: white;
            border-radius: 12px 0 0 12px;
        }

        .btn-login {
            height: 50px;
            border-radius: 12px;
            font-weight: bold;
            font-size: 17px;
            transition: 0.3s;
        }

        .btn-login:hover {
            transform: scale(1.03);
        }

        .extra-links a {
            color: #dc3545;
            text-decoration: none;
            font-size: 14px;
        }

        .extra-links a:hover {
            text-decoration: underline;
        }
    </style>

</head>

<body>

    <div class="container">

        <div class="row vh-100 justify-content-center align-items-center">

            <div class="col-md-5 col-lg-4">

                <div class="login-box">

                    <div class="logo">
                        <i class="fa-solid fa-wrench"></i>
                    </div>

                    <h2 class="text-center">
                        Taller Mecánico
                    </h2>

                    <p class="text-center mb-4">
                        Inicia sesión para continuar
                    </p>

                    <form action="../../controller/LoginController.php" method="POST">

                        <div class="input-group mb-3">

                            <span class="input-group-text">
                                <i class="fa-solid fa-envelope"></i>
                            </span>

                            <input type="email"
                                name="correo"
                                class="form-control"
                                placeholder="Correo electrónico"
                                required>

                        </div>

                        <div class="input-group mb-4">

                            <span class="input-group-text">
                                <i class="fa-solid fa-lock"></i>
                            </span>

                            <input type="password"
                                name="password"
                                class="form-control"
                                placeholder="Contraseña"
                                required>

                        </div>

                        <button class="btn btn-danger btn-login w-100">
                            <i class="fa-solid fa-right-to-bracket"></i>
                            Ingresar
                        </button>

                    </form>

                    <div class="extra-links text-center mt-4">

                        <a href="#">
                            Volver al inicio
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>