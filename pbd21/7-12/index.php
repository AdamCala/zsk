<?php
  session_start();
  $_SESSION['login'] = 'janusz';
  $_SESSION['pass'] = 'pass';
  echo session_id();
  session_regenerate_id();
  echo session_name();
 ?>
 <a href="plik.php">strona2</a>
