<?php
  if(!empty($_POST)){
    foreach ($_POST as $key => $value) {
      if (empty($value)) {
        header('location: script.php?error=Wypełnij wszystkie pola&addUser=');
        exit();
      }
    }
      require_once "connect.php";
      $sql = "INSERT INTO `users`(`id`, `name`, `surname`, `birthday`, `city_id`, `wzrost`) VALUES (NULL, '$_POST[name]', '$_POST[surname]', '$_POST[birthday]', '$_POST[city_id]', '$_POST[wzrost]')";
      $connect->query($sql);

      if($connect->affected_rows){
        header('location: script.php?error=Prawidłowo dodano użytkownika');
      }
      else {
        header('location: script.php?error=Nie udało się dodać użytkownika');
      }
  }
 ?>
