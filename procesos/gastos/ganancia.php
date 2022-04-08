<?php
    session_start();
    include "../../clases/Conexion.php";
    include "../../clases/Gastos.php";
    $Gastos = new Gasto();
    $monto_activos = $_POST['monto_activos'];
    $tipo_activos = $_POST['tipo_activos'];
    $activos = array(
        $monto_activos,
        $tipo_activos
    );
    if ($Gastos->ingresaActivo($activos) == 1) {
        header("location:../../vistas-panel/inicio.php");
    }
?>