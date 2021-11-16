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

  $sql = "SELECT * FROM `users` INNER JOIN cities ON `users`.`city_id` = `cities`.`id`" ; //TO NIE APOSTROFY TYLKO TO POD ~

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
        <a href="insert.php?id=$rows[id]">Usuń</a>
      </td>
      <td>
        <a href="skrypt.php?id=$rows[id]&Updateuser=">Aktualizuj</a>
      </td>
    </tr>
    ROW;
  }
  echo "</table>";
  if(isset($_GET['addUser'])){
    echo '<a href="../16-11/script.php?addUser=">Usuwanie użytkownika</a>';
  }else if(!isset($_GET['Updateuser'])){
    echo <<<ADDUSERFORM
    <h4>Dodanie użytkownika</h4>
    <form method="post" action="insert.php">
      <input type="text" name="name" placeholder="Podaj imię"><br><br>
      <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
      <input type="date" name="birthday" placeholder="Data urodzenia"><br><br>
      <input type="number" name="wzrost" placeholder="Podaj wzrost"><br><br>
      <select name="city_id">
    ADDUSERFORM;
      $sql = "SELECT * FROM `cities`";
      $rezultat = $connect->query($sql);
      while($rows = $rezultat->fetch_assoc()){
        echo "<option value=\"$rows[id]\">$rows[city] </option>";
      };
    echo <<<ADDUSERFORM
    </select><br><br>
      <input type="submit" value="Dodaj użytkownika">
    <form>
    ADDUSERFORM;
  }else{
    echo <<<UPDATEUSERFORM
    <h4>Aktualizacja użytkownika</h4>
    <form method="post" action="update.php?id=$_GET[id]">
      <input type="text" name="name" placeholder="Podaj imię"><br><br>
      <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
      <input type="date" name="birthday" placeholder="Data urodzenia"><br><br>
      <input type="number" name="wzrost" placeholder="Podaj wzrost"><br><br>
      <select name="city_id">
    UPDATEUSERFORM;
      $sql = "SELECT * FROM `cities`";
      $rezultat = $connect->query($sql);
      while($rows = $rezultat->fetch_assoc()){
        echo "<option value=\"$rows[id]\">$rows[city] </option>";
      };
    echo <<<UPDATEUSERFORM
    </select><br><br>
      <input type="submit" value="Zaktualizuj użytkownika">
    <form>
    UPDATEUSERFORM;
  }
 ?>
  </select>



</body>
</html>
