<?php
  require_once 'connect.php';
  if(!empty($_GET['id'])){
    $id=$_GET['id'];
    $sql = "DELETE FROM `user` WHERE `user`.`id` = $id";
    $connect->query($sql);
    if($connect->affected_rows>0){
      header("location: script.php?delUser=$id");
    }else{
      echo "error";
    }
  }else{
    header('location: script.php');
  }
 ?>
