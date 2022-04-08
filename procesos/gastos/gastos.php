<?php
    include "../../clases/Conexion.php";
    include "../../clases/Gastos.php";
    $Gastos = new Gasto();
    $monto_pasivos = $_POST['monto_pasivos'];
    $tipo_pasivos = $_POST['tipo_pasivos'];
    $pasivos = array(
        $monto_pasivos,
        $tipo_pasivos
    );
    if ($Gastos->ingresaPasivo($pasivos) == 1) {
        header("location:../../vistas-panel/inicio.php");
    }
?>