<?php
  session_start();
  unset($_SESSION['login']);
  echo $_SESSION['login'];
  echo $_SESSION['pass'];
  session_destroy();
  echo session_status();
  echo session_id();
 ?>
 <a href="index.php">strona1</a>
