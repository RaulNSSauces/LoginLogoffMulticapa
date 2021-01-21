<?php
if(isset ($_REQUEST["cancelar"])){
    $_SESSION["paginaEnCurso"]=$controlador["inicio"];
    header("Location: index.php");
    exit;
}
define("OBLIGATORIO", 1);
    
    $entradaOk=true;
    
    $error= null;
    
    if(isset($_REQUEST["cambiar"])){
        $error=validacionFormularios::comprobarAlfabetico($_REQUEST["descUsuario"], 16, 3, OBLIGATORIO);
        
        if($error!=null){
            $entradaOk=false;
        }
    }else{
        $entradaOk=false;
    }

    if($entradaOk){
        $oUsuario= usuarioPDO::modificarUsuario($_REQUEST["codUsuario"], $_REQUEST["descUsuario"]);
        $_SESSION["usuarioDAW203LoginLogoffMulticapa"]=$oUsuario;
        $_SESSION["paginaEnCurso"] = $controlador["inicio"];
        header("Location: index.php");
        exit;
    }
    $codUsuario=$_SESSION['usuarioDAW203LoginLogoffMulticapa']->getCodUsuario();
    $descUsuario = $_SESSION['usuarioDAW203LoginLogoffMulticapa']->getDescUsuario();
    $numConexiones = $_SESSION['usuarioDAW203LoginLogoffMulticapa']->getNumConexiones();
    $fechaHoraUltimaConexion = $_SESSION['usuarioDAW203LoginLogoffMulticapa']->getFechaHoraUltimaConexion();
    
    $vista = $vistas['editarPerfil'];
    require_once $vistas['layout'];
?>