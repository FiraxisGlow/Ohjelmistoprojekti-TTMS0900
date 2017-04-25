<?php
 session_start();

  echo "Logout Successfully ";
  session_destroy();   // function that Destroys Session 
  header("Location: https://bodka-bodka.c9users.io/login/index.php");
?>