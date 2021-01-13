<?php
    if(!isset($_SESSION["usuarioDAW203LoginLogoffMulticapa"])){
        header("Location: index.php");
        exit;
    }
    if(isset($_REQUEST["cerrarSesion"])){
        session_destroy();
        header("Location: index.php");
        exit;
    }
    
    $numConexiones = $_SESSION['usuarioDAW203LoginLogoffMulticapa']->T01_NumConexiones;
    $descUsuario = $_SESSION['usuarioDAW203LoginLogoffMulticapa']->T01_DescUsuario;
    $fechaHoraUltimaConexion = $_SESSION['usuarioDAW203LoginLogoffMulticapa']->T01_FechaHoraUltimaConexion;
    
    $vista = $vistas['inicio'];
    require_once $vistas['layout'];
?>