<?php
  session_start();
 //redirect i not logged in 
  session_unset();

  session_destroy();

  header('Location:../proyecto_2/index_login.php');
?>