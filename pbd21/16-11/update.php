<?php
  if(!empty($_POST)){
    foreach ($_POST as $key => $value) {
      if (empty($value)) {
        header('location: script.php?error=Wypełnij wszystkie pola');
        exit();
      }
    }
      require_once "connect.php";
      $sql = "UPDATE `users` SET `name`='$_POST[name]',
      `surname`='$_POST[surname]',
      `birthday`='$_POST[birthday]',
      `wzrost`='$_POST[wzrost]'
      `city_id` = '$_POST[city_id]'
      WHERE `user_id` = '$_GET[id]'";
      $connect->query($sql);

      if($connect->affected_rows){
        header('location: script.php?error=Prawidłowo zaktualizowano użytkownika');
      }
      else {
        header('location: script.php?error=Nie udało się zaktualizować użytkownika');
      }
  }
 ?>
