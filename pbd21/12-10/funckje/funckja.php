<!DOCTYPE html>
<html lang="PL-pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane użytkownika</title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="name" placeholder="podaj imie">
      <input type="text" name="nazwisko" placeholder="podaj nazwisko">
      <input type="number" name="leng" placeholder="Podaj długość">
      <input type="submit" name="button" value="zatwierdź">
    </form>
    <?php
      if(isset($_POST['button'])){
        require_once '../skrypty/skrypt_funkcja.php';
        test($_POST['name'],$_POST['nazwisko'],$_POST['leng']);
      }
     ?>
  </body>
</html>
