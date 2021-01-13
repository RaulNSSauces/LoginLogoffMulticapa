<?php

    require_once 'core/libreriaValidacion.php';
    require_once 'model/dbPDO.php';
    require_once 'model/usuario.php';
    require_once 'model/usuarioPDO.php';
    
    $controlador=["login" => "controller/cLogin.php",
                  "inicio" => "controller/cInicio.php"];
    
    $vistas=["login" => "view/vLogin.php",
            "inicio" => "view/vInicio.php",
            "layout" => "view/layout.php"];
    
    if(isset($_SESSION['usuarioDAW203LoginLogoffMulticapa'])){
        $usuario=$_SESSION['usuarioDAW203LoginLogoffMulticapa'];
    }
?>

