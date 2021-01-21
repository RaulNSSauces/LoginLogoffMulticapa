<?php
    require_once 'core/libreriaValidacion.php';
    require_once 'model/DBPDO.php';
    require_once 'model/Usuario.php';
    require_once 'model/UsuarioPDO.php';
    
    $controlador=["login" => "controller/cLogin.php",
                  "inicio" => "controller/cInicio.php",
                  "registro" => "controller/cRegistro.php",
                  "editarPerfil" => "controller/cEditarPerfil.php"];
    
    $vistas=["login" => "view/vLogin.php",
             "inicio" => "view/vInicio.php",
             "layout" => "view/Layout.php",
             "registro" => "view/vRegistro.php",
             "editarPerfil" => "view/vEditarPerfil.php"];
?>