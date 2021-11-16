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

  $sql = "SELECT * FROM `users`"; //TO NIE APOSTROFY TYLKO TO POD ~

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
      <th>Update</th>
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
        <a href="del.php?id=$rows[id]">Usuń</a>
      </td>
      <td>
        <a href="skrypt.php?id=$rows[id]?Updateuser=">Aktualizuj</a>
      </td>
    </tr>
    ROW;
  }
  echo "</table>"
 ?>

 <a href="../16-11/skrypt.php">Dodawanie użytkownika</a>

</body>
</html>
