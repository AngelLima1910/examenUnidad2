<?php 
    class Conexion {
        private $servidor = "localhost";
        private $usuario = "root";
        private $password = "Urbandfiv3";
        private $puerto = "3305";
        private $bd = "gastos";
        public function Conectar() {
            try {
                $conexion = mysqli_connect(
                    $this->servidor, 
                    $this->usuario, 
                    $this->password, 
                    $this->bd, 
                    $this->puerto);
                return $conexion;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
    }
?>