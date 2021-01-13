<?php

    session_start();
    
    require_once 'config/config.php';
    require_once 'config/confDB.php';


    if(isset($_SESSION["usuarioDAW203LoginLogoffMulticapa"])){
        require_once $controlador["inicio"];
    }else{
        require_once $controlador["login"];
    }
?>

