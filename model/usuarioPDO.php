<?php
    class usuarioPDO{
        
        public static function validarUsuario($codUsuario, $password){
            $oUsuario=null;
            
            $sql="SELECT * FROM T01_Usuario where T01_CodUsuario=? and T01_Password=?";
            $encriptarPassword=hash("sha256", ($codUsuario.$password));
            $resultado=DB::consultaSQL($sql, [$codUsuario, $encriptarPassword]);
            
            if($resultado->rowCount()>0){
                $oUsuario=$resultado->fetchObject();
            }
            return $oUsuario;
        }
        
        public static function altaUsuario($codUsuario, $password, $descUsuario){
            $oUsuario=null;
            
            $sql="INSERT INTO T01_Usuario (T01_CodUsuario, T01_Password, T01_DescUsuario, T01_NumConexiones, T01_FechaHoraUltimaConexion) values (?,?,?,1,?)";
            $resultado=DB::consultaSQL($sql, [$codUsuario, $password, $descUsuario, time()]);
            
            if($resultado->rowCount()>0){
                $oUsuario=$resultado->fetchObject();
            }
            return $oUsuario;
        }
    }
?>