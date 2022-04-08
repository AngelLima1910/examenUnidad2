<?php
    class Gasto {
        public function ingresaActivo($activos) {
            $con = new Conexion();
            $conexion = $con->Conectar();
            $sql = "INSERT INTO t_activos (monto_activos, id_tipo_act) VALUES ('$activos[0]', '$activos[1]')";
            return mysqli_query($conexion, $sql);
        }
        public function muestraDatos($sql) {
            $con = new Conexion();
            $conexion = $con->Conectar();
            $result = mysqli_query($conexion, $sql);
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        public function ingresaPasivo($pasivos) {
            $con = new Conexion();
            $conexion = $con->Conectar();
            $sql = "INSERT INTO t_pasivos (monto_pasivos, id_tipo_pas) VALUES ('$pasivos[0]', '$pasivos[1]')";
            return mysqli_query($conexion, $sql);
        }
        public function consultarReporte() {
            $con = new Conexion();
            $conexion = $con->Conectar();
            $sql = "SELECT t_activos.monto_activos, t_cat_activos.nombre_activos, t_activos.fecha_ingreso FROM t_activos INNER JOIN t_cat_activos ON t_activos.id_tipo_act = t_cat_activos.id_cat_activos";
            $sql = "SELECT t_pasivos.monto_pasivos, t_cat_pasivos.nombre_pasivos, t_pasivos.fecha_gasto FROM t_pasivos INNER JOIN t_cat_pasivos ON t_pasivos.id_tipo_pas = t_cat_pasivos.id_cat_pasivos";
            return mysqli_query($conexion, $sql);
        }
        public function mostrarSaldo(){
            $con = new Conexion();
            $conexion = $con->Conectar();
            $sql = "SELECT sum(monto_activos) - monto_pasivos as total FROM t_activos INNER JOIN t_pasivos";
            $result = mysqli_query($conexion, $sql);
            $ver = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $ver;
        }
    }
?>