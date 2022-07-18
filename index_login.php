
     <!----------------------------------------- registro - formulario ---------------------------------->
<?php
require '../proyecto_2/configuraciones/database.php';
$message = '';
   //connect database.php
if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['user_name'])) {
  $sql = "INSERT INTO users (email, password, user_name) VALUES (:email, :password, :user_name )";
  $stmt = $conn->prepare($sql);
  //registro 
  $stmt->bindParam(':email', $_POST['email']);
  $stmt->bindParam(':user_name', $_POST['user_name']);
 // $stmt->bindParam(':confirm_password', $_POST['confirm_password']);
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $stmt->bindParam(':password', $password);
  if ($stmt->execute()) {
    $message = 'se creo la cuenta';
  } else {
    $message = 'perdon no se creo la cuenta';
  }
}
?>
     <!----------------------------------------- registro - formulario ---------------------------------->

<!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->

     <!----------------------------------------- iniciar session ----------------------------------

<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: ../proyecto_2/index_login.php');
  }

  require '../proyecto_2/configuraciones/database.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';
  if (is_countable($results) && count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header('Location: ../proyecto_2/index_login.php');
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }

?>
     ----------------------------------------- iniciar session ---------------------------------->

<!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->

     <!-----------------------------------------vista 1---------------------------------->

<?php
  session_start();

  require '../proyecto_2/configuraciones/database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>
     <!-----------------------------------------vista 1---------------------------------->

<!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->

     <!--------------------------------------------------------------------------->


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
      <h4> <?= $message ?></h4>
    <?php endif; ?>

    <?php if(!empty($user)): ?>
      <br> bienvenido <?= $user['email']; ?>
      <br>You are Successfully Logged In
      <a href="vista_1php">
        Logout
      </a>
    <?php else: ?>
      <a href="./vistas/vista_1.php">Login</a> or

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
                        <input type="text" name="email" placeholder="Correo electronico" />
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

                                            <!---->
                        <form action="../proyecto_2/index_login.php" method="POST">
                        <h2>CREAR CUENTA</h2>
                        <input type="text" name="user_name" placeholder="Nombre del Usuario">
                        <input type="text" name="email" placeholder="Correo Electronico">
                        <input type="password" name="password" placeholder="Contraseña">
                        <!--<input type="password" name="confirm_password" placeholder="Confirmar contraseña"> -->
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