<?php 
    class Usuario {
        public function logear($usuario, $password) {
            try {
                $con = new Conexion();
                $conexion = $con->Conectar();
                $sql = "SELECT * FROM t_usuarios WHERE usuario = '$usuario' AND password = '$password'";
                $respuesta = mysqli_query($conexion, $sql);
                //Se pregunta cuantos registros existen
                $existe = mysqli_num_rows($respuesta);
                if ($existe > 0) {
                    $_SESSION['usuario'] = $usuario;
                    return true;
                } else {
                    return false;
                        }
            } catch (\Throwable $th) {
                return $th->getMessage();
            }          
        }
        public function insertarDatos($datos) {
            $con = new Conexion();
            $conexion = $con->Conectar();
            $sql = "INSERT INTO t_usuarios (nombre, a_paterno, a_materno, usuario, password) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]')";
            return $respuesta = mysqli_query($conexion, $sql);
        }
    }
?>