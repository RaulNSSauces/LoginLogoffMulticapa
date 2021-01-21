<?php
    if(!isset($_SESSION["usuarioDAW203LoginLogoffMulticapa"])){
        header("Location: index.php");
        exit;
    }
    if(isset($_REQUEST["editarPerfil"])){
        $_SESSION["paginaEnCurso"] = $controlador["editarPerfil"];
        header("Location: index.php");
        exit;
    }
    if(isset($_REQUEST["cerrarSesion"])){
        session_destroy();
        header("Location: index.php");
        exit;
    }

    $numConexiones = $_SESSION['usuarioDAW203LoginLogoffMulticapa']->getNumConexiones();
    $descUsuario = $_SESSION['usuarioDAW203LoginLogoffMulticapa']->getDescUsuario();
    $fechaHoraUltimaConexion = $_SESSION['usuarioDAW203LoginLogoffMulticapa']->getFechaHoraUltimaConexion();
    
    $vista = $vistas['inicio'];
    require_once $vistas['layout'];
?>