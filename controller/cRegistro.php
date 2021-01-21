<?php
if(isset ($_REQUEST["cancelar"])){
    $_SESSION["paginaEnCurso"]=$controlador["login"];
    header("Location: index.php");
    exit;
}

    define("OBLIGATORIO", 1);
    
    $entradaOk=true;
    
    $aErrores=["codUsuario" => null,
               "descUsuario" => null,
               "password" => null,
               "confirmarPassword" => null];
    
    if(isset($_REQUEST["registrate"])){
        $aErrores["codUsuario"]= validacionFormularios::comprobarAlfaNumerico($_REQUEST["codUsuario"], 16, 3, OBLIGATORIO);
        $aErrores["descUsuario"]= validacionFormularios::comprobarAlfabetico($_REQUEST["descUsuario"], 16, 3, OBLIGATORIO);
        $aErrores["password"] = validacionFormularios::validarPassword($_REQUEST["password"], 8, 1, 1, OBLIGATORIO);
        $aErrores["confirmarPassword"] = validacionFormularios::validarPassword($_REQUEST["confirmarPassword"], 8, 1, 1, OBLIGATORIO);
 
        if($_REQUEST["password"]!=$_REQUEST["confirmarPassword"]){
            $aErrores["confirmarPassword"]="Las contraseñas no coinciden";
        }
    
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
        $oUsuario= usuarioPDO::altaUsuario($_REQUEST["codUsuario"],$_REQUEST["password"],$_REQUEST["descUsuario"]);
        $_SESSION["usuarioDAW203LoginLogoffMulticapa"]=$oUsuario;
        $_SESSION["paginaEnCurso"] = $controlador["inicio"];
        header("Location: index.php");
        exit;
    }
    
    $vista = $vistas['registro'];
    require_once $vistas['layout'];
?>