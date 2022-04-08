<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro para usuarios</title>
    <link rel="stylesheet" href="../public/css/b5/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Registro de usuarios</h1>
                <form action="../procesos/usuarios/registro.php" method="POST">
                    <label for="">Nombre de usuario</label>
                    <input type="text" class="form-control" name="usuario" required 
                    placeholder="Usuario">
                    <label for="">Contraseña</label>
                    <input type="password" name="password" class="form-control" required 
                    placeholder="Contraseña">
                    <label for="">Nombre(s)</label>
                    <input type="text" name="nombre" class="form-control" required placeholder="Nombre(s)">
                    <label for="">Apellido Paterno</label>
                    <input type="text" name="a_paterno" class="form-control" required
                        placeholder="Apellido paterno">
                    <label for="">Apellido Materno</label>
                    <input type="text" class="form-control" name="a_materno" required
                        placeholder="Apellido materno">
                    <br>
                    <button class="btn btn-success">Registrar</button>
                    <a href="../index.php" class="btn btn-warning">Regresar</a>
                </form>
            </div>
        </div>
    </div>
    <script src="../public/js/b5/bootstrap.min.js"></script>
</body>

</html>