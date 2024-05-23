
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>login y registro </title>
</head>
<body>
    <main>
    <div class="contenedor__todo">
        <div class="caja__trasera">
            <div class="caja__trasera-login">
                <h3>Tienes una cuenta?</h3>
                <p>Inicia sesión aqui</p>
                <button id="btn__iniciar-sesion">Iniciar Sesión</button>
            </div>
            <div class="caja__trasera-register">
                <h3>Crear cuenta</h3>
                <p>Registrate aqui para iniciar sesión</p>
                <button id="btn__registrarse">Registrarse</button>
            </div>
        </div>

        <div class="contenedor__login-register">
            <form action="conf/login_usuario.php" method="POST" class="formulario__login">
                <h2>Iniciar Sesión</h2>
                <input type="text" placeholder="Correo" name= "correo">
                <input type="password" placeholder="Contraseña" name= "contraseña">
                <button>Entrar</button>
            </form>

            <form action="conf/registro_usuario.php" method="POST" class="formulario__register">
                <h2>Registrate</h2>
                <input type="text" placeholder="Nombre Completo" name= "nombre_completo">
                <input type="text" placeholder="Correo" name= "correo">
                <input type="text" placeholder="Usuario" name= "usuario">
                <input type="password" placeholder="Contraseña" name= "contraseña">
                <button>Registrarse</button>
            </form>

        </div>
    </div>
    </main>
    <script src="assets/js/script.js"></script>
</body>
</html>