<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

    </style>

    <link rel="stylesheet" href="models/estilos.css">
</head>

<body>
    <main>
        <div class="contenedor__todo">

            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿YA TIENES UNA CUENTA?</h3>
                    <p> Inicia sesion para entrar en la pagina</p>
                    <button id="btn__iniciar-sesion">INICIAR SESION</button>
                </div>

                <div class="caja__trasera-register">
                    <h3>¿AUN NO TIENES UNA CUENTA?</h3>
                    <p> Registrate para que puedas iniciar sesion</p>
                    <button id="btn__registrarse">REGISTRARSE</button>
                </div>

            </div>

            <!--formulario de login y registro-->

            <div class="contenedor__login-register">

                <!--login-->
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesion</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>ENTRAR</button>
                </form>
                <!--registro-->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>REGISTRARSE</button>
                </form>
            </div>
        </div>
    </main>
    <script src="models/script.js"></script>
</body>

</html>
