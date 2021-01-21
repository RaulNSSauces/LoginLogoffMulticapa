<header>
    <h1>Login Logoff Multicapa</h1>
</header>
<main>
    <div class="loginbox">
        <h2>INICIO DE SESIÓN</h2>
    <form name="login" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <div>
                <label for="codUsuario">Nombre de usuario: </label>
                <input type="text" name="codUsuario" placeholder="Introduce nombre de usuario">
            </div>
        <br>
            <div>
                <label for="password">Contraseña: </label>
                <input type="password" name="password" placeholder="Introduce contraseña">
            </div>
        <br>
            <div>
                <button type="submit" name="iniciarSesion">Iniciar Sesión</button>
                <button type="submit" name="registrate">Regístrate</button>
            </div>
    </form>
    </div>
</main>