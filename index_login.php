<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos_vista_css/index_login.css">

     
    <title>login</title>
</head>

<body>

<section>
    <!--bostrap-->
        <div class="container">
            <div class="user signinBx">
                <div class="imgBx"><img src="./imagenes/foto_1.jpg" /></div>
                <div class="formBx">
                    <form>
                        <h2>INICIAR SESION</h2>
                        <input type="text" placeholder="Usuario." />
                        <input type="password" placeholder="Contraseña." />
                        <input type="submit" value="Ingresar" />
                        <p class="signup">
                            ¿No tienes una cuenta?
                            <a href="#" onclick="toggleForm();"> Registrate.</a>
                        </p>
                    </form>
                </div>
            </div>
            <div class="user signupBx">
                <div class="formBx">
                    <form>
                        <h2>CREAR CUENTA</h2>
                        <input type="text" placeholder="Nombre del Usuario">
                        <input type="text" placeholder="Correo Electronico">
                        <input type="password" placeholder="Contraseña">
                        <input type="password" placeholder="Confirmar contraseña">
                        <input type="submit" value="Registrate">
                        <p class="signup">
                            ¿Ya tienes una cuenta?
                            <a href="#" onclick="toggleForm();"> Iniciar Sesion.</a>
                        </p>
                    </form>
                </div>
                <div class="imgBx"><img src="./imagenes/foto_2.jpg" /></div>
            </div>
        </div>
    </section>
    <script>
        function toggleForm() {
            section = document.querySelector('section');
            container = document.querySelector('.container');
            container.classList.toggle('active');
            section.classList.toggle('active');
        }
    </script>

</body>

</html>