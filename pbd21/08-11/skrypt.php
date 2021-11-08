<!DOCTYPE html>
<html lang="PL-pl">
<head>
  <meta charset="utf-8">
  <title>Użytkownicy</title>
  <link rel="stylesheet" href="styl.css">
</head>
<body>

<?php
  require_once 'connect.php';

  $sql = "SELECT * FROM `user`"; //TO NIE APOSTROFY TYLKO TO POD ~

  $rezultat = $connect->query($sql);

  if(isset($_GET['delUser'])){
    echo "usunięto użytkownika o id =$_GET[delUser]<br>";
  }

  echo "<table>";
  echo <<<TABLE
    <tr>
      <th>Id</th>
      <th>Imię</th>
      <th>Nazwisko</th>
      <th>Data Urodzenia</th>
      <th>Wzrost</th>
      <th>Usuń</th>
    </tr>
  TABLE;
  while($rows = $rezultat->fetch_assoc()){
    echo <<<ROW
    <tr>
      <td>
        $rows[id]
      </td>
      <td>
        $rows[name]
      </td>
      <td>
        $rows[surname]
      </td>
      <td>
        $rows[birthday],
      </td>
      <td>
        $rows[wzrost]cm.
      </td>
      <td>
        <a href="insert.php?id=$rows[id]">Usuń</a>
      </td>
    </tr>
    ROW;
  }
  echo "</table>";
  if(isset($_GET['addUser'])){
    echo '<a href="../02-11/script.php?addUser=">Usuwanie użytkownika</a>';
  }else{
    echo <<<ADDUSERFORM
    <h4>Dodanie użytkownika</h4>
    <form method="post" action="insert.php">
    <input type="text" name="name">
    <form>
    ADDUSERFORM;
  }
 ?>



</body>
</html>
