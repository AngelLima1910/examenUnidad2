<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./public/css/b5/bootstrap.min.css">
</head>
<body>
    <section class="text-center">
        <div class="container mt-4">
            <div class="row">
                <div class="col-4">

                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Iniciar Sesión</h5>
                            <form action="./procesos/usuarios/login.php" method="POST">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example1">Usuario</label>
                                    <input type="text" name="usuario" class="form-control" required
                                        placeholder="Usuario">
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example2">Contraseña</label>
                                    <input type="password" name="password" class="form-control" required
                                        placeholder="Contraseña">
                                </div>
                                <div class="row mb-4">
                                    <div class="col d-flex justify-content-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="form2Example34"
                                                checked />
                                            <label class="form-check-label" for="form2Example34"> Recuerdame </label>
                                        </div>
                                    </div>
                                    <button class="btn btn-success btn-block mb-4">Ingresar</button>
                                </div>
                                <div class="text-center">
                                    <p>Aun no estas registrado?
                                        <br>
                                        <a href="./vistas-panel/ingreso.php" class="btn btn-secondary">
                                            Crear cuenta nueva
                                        </a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-4">

                </div>
            </div>
        </div>
    </section>
    <script src="./public/js/b5/bootstrap.min.js"></script>
</body>
</html>