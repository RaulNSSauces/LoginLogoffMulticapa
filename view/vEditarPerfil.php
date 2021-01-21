<header>
    <h1>EDITAR PERFIL</h1>
</header>
<main>
    <div class="loginbox">
    <form name="modificarPerfil" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <div>
                <label for="codUsuario">Nombre de usuario: </label>
                <input type="text" name="codUsuario" value="<?php echo $codUsuario?>" readonly>
            </div>
        <br>
            <div>
                <label for="descUsuario">Descripción del usuario: </label>
                <input style="background-color:#1abc9c;" type="text" name="descUsuario" value="<?php echo $descUsuario?>">
                <?php
                    if(isset($_REQUEST["descUsuario"]) && $error == null){
                        echo $_REQUEST["descUsuario"];
                    }
                    if ($error != null){
                        echo $error;
                    }
                ?>
            </div>
        <br>
            <div>
                <label for="numConexiones">Número de conexiones: </label>
                <input type="text" name="numConexiones" value="<?php echo $numConexiones?>" readonly>
            </div>
        <br>
            <div>
                <label for="fechaHoraUltimaConexion">Fecha y Hora de la última conexión: </label>
                <input type="text" name="fechaHoraUltimaConexion" value="<?php $fechaHoraUltimaConexion?>" readonly>
            </div>
        <br>
            <div>
                <button class="editarPerfil" type="submit" name="cambiar">Aceptar</button>
                <button class="editarPerfil" type="submit" name="cancelar">Cancelar</button>
            </div>
    </form>
    </div>
</main>