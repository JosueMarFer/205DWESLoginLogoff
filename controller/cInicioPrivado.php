<?php

//@author Josue Martinez Fernandez
//@version 1.0
//ultima actualizacion 12/01/2023   
//Si la sesion no tiene almcenado un usuario redirige al login
if (!isset($_SESSION['usuarioMiAplicacion']) || is_null($_SESSION['usuarioMiAplicacion'])) {
    $_SESSION['paginaEnCurso'] = 'inicioPublico';
    header('Location: ./index.php');
    exit();
}
//Carga el usuario almacenado en la sesion en un objeto
$oUsuario = $_SESSION['usuarioMiAplicacion'];
$fechaFormateada = new DateTime($oUsuario->getFechaHoraUltimaConexionAnterior());
$fechaFormateada = $fechaFormateada->format("d-m-Y H:i:s");
//Si se pulsa salir se destruye la sesion y se redirige a inicio publico
if (isset($_REQUEST['cerrarSesion'])) {
    $_SESSION['usuarioMiAplicacion'] = null;
    unset($oUsuario);
    session_destroy();
    header('Location: ./index.php');
    exit();
}
//Si se pulsa detalle envia a la pagina de detalle
if (isset($_REQUEST['detalle'])) {
    $_SESSION['paginaEnCurso'] = 'detalle';
    header('Location: ./index.php');
    exit();
}
require_once $aVistas['layout'];
?>

