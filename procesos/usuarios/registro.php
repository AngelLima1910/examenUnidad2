<?php
    include "../../clases/Conexion.php";
    include "../../clases/Usuario.php";
    $Usuarios = new Usuario();
    $nombre = $_POST['nombre'];
    $a_paterno = $_POST['a_paterno'];
    $a_materno = $_POST['a_materno'];
    $usuario = $_POST['usuario'];
    $password = sha1($_POST['password']);
    $datos = array(
        $nombre,
        $a_paterno,
        $a_materno,
        $usuario,
        $password
    );
    if ($insertado = $Usuarios->insertarDatos($datos) == 1) {
        header("location:../../index.php");
    }
?>