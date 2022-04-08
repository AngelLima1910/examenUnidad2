<?php 
    session_start();
    include "../../clases/Conexion.php";
    include "../../clases/Usuario.php";
    $Usuarios = new Usuario();
    $usuario = $_POST['usuario'];
    $password = sha1($_POST['password']);
    $respuesta = $Usuarios->logear($usuario, $password);
    if ($respuesta) {
        // echo "Estas dentro";
        header("location:../../vistas-panel/inicio.php");
    } else {
        echo "No puedes entrar" . $respuesta;
    }
?>