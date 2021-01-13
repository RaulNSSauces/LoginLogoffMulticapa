<?php

    define("OBLIGATORIO", 1);
    
    $entradaOk=true;
    
    $aErrores=["codUsuario" => null,
               "password" => null];
    
    if(isset($_REQUEST["iniciarSesion"])){
        $aErrores["codUsuario"]= validacionFormularios::comprobarAlfaNumerico($_REQUEST["codUsuario"], 16, 3, OBLIGATORIO);
        $aErrores["password"] = validacionFormularios::validarPassword($_REQUEST["password"], 8, 1, 1, OBLIGATORIO);
    
        foreach($aErrores as $campo => $error){
            if($error!=null){
                $entradaOk=false;
                $_REQUEST[$campo]="";
            }
        }
    }else{
        $entradaOk=false;
    }
    
    if($entradaOk){
        $usuario=$_REQUEST["codUsuario"];
        $password=$_REQUEST["password"];
        
        $oUsuario= usuarioPDO::validarUsuario($usuario, $password);
        
        if(isset($oUsuario)){
            $_SESSION["usuarioDAW203LoginLogoffMulticapa"]=$oUsuario;
            //usuarioPDO::actualizarUltimaConexion($oUsuario->T01_CodUsuario);
            header('Location: index.php');
            exit;
        }
    }
    
    $vista = $vistas['login'];
    require_once $vistas['layout'];
?>