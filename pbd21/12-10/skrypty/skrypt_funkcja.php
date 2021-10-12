<?php
  function test($name, $surname,$char){
    $name_t = trim($name);
    $surname_t = trim($surname);
    $name_t = strtolower($name_t);
    $name_t = ucfirst($name_t);
    $surname_t = strtolower($surname_t);
    $surname_t = ucfirst($surname_t);
    $name_t = substr($name_t,0,$char);
    $surname_t = substr($surname_t,0,$char);
    $name_surname = $name_t ." ". $surname_t;
    echo "$name_surname";
  }
 ?>
