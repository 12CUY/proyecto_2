
<?php

require '../proyecto_2/configuraciones/base_datos.php';

$message = '';
   //connect database.php

if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':email', $_POST['email']);
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $stmt->bindParam(':password', $password);

  if ($stmt->execute()) {
    $message = 'Successfully created new user';
  } else {
    $message = 'Sorry there must have been an issue creating your account';
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--usos-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos_vista_css/index_login.css">

    
    <title>login</title>
</head>

<body>

<?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>


<section>

    <!--bostrap-->
        <div class="container">
            <div class="user signinBx">
                <div class="imgBx"><img src="./imagenes/foto_1.jpg" /></div>
                <div class="formBx">

                <!--base de datos mysql-->
                    <form action="../proyecto_2/vistas/vista_1.php" method="POST">
                        <h2>INICIAR SESION</h2>
                        <input type="text" name="usernmame" placeholder="Ingresa tu usuario" />
                        <input type="password" name="password" placeholder="Ingresa tu contraseña" />
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
                                    <!--base de datos mysql-->

        
                        <form action="../proyecto_2/index_login.php" method="POST">
                        <h2>CREAR CUENTA</h2>
                        <input type="text" name="user_name" placeholder="Nombre del Usuario">
                        <input type="text" name="email" placeholder="Correo Electronico">
                        <input type="password" name="password" placeholder="Contraseña">
                        <input type="password" name="confirm_password" placeholder="Confirmar contraseña">
                        <input type="submit" value="Registrate">
                        <p class="signup">
                            ¿Ya tienes una cuenta?
                            <a href="#" onclick="toggleForm();"> Iniciar Sesion.</a>
                        </p>
                    </form>
                </div>
                <div class="imgBx"><img src="./imagenes/imagen_4.jpg" /></div>
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