<?php
  session_start();
 //redirect i not logged in 
  session_unset();

  session_destroy();

  header('Location:vista_1.php');
?>