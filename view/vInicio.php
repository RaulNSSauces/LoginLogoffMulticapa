<header>
    <h1>INICIO</h1>
</header>
<main>
    <article>
        <h3>BIENVENIDO <?php echo $descUsuario?></h3>
        <?php
            if($numConexiones>0){
        ?>
        <h3>Esta es su conexión número: <?php echo $numConexiones?></h3>
        <h3>Su última conexión fue: <?php echo date("d-m-Y H:i:s",$fechaHoraUltimaConexion)?></h3>
        <?php
            }else{
                echo "<h2>Esta es la primera vez que se conecta</h2>";
            }
        ?>
    </article>
    <form name="inicio" method="post">
        <input class="inicio" type="submit" value="EDITAR PERFIL" name="editarPerfil">
        <input class="inicio" type="submit" value="CERRAR SESIÓN" name="cerrarSesion">
    </form>
</main>