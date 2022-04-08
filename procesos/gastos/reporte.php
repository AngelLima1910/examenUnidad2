<?php
    include "../../clases/Conexion.php";
    include "../../clases/Gastos.php";
    $Gastos = new Gasto();
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_fin = $_POST['fecha_fin'];
    $tipo_reportes = $_POST['tipo_reportes'];
    $reportes = array(
        $fecha_inicio,
        $fecha_fin,
        $tipo_reportes
    );
    if ($Gastos->consultarReporte($reportes) == 1) {
        header("location:../../vistas-panel/inicio.php");
    }
?>