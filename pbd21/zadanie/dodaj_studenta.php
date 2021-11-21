<?php
if(isset($_GET['error'])){
    echo $_GET['error'];
};
echo <<<FORM
    <form action="insert.php" method="post">
        <input type="text" name="imie" placeholder="Podaj imie"><br><br>
        <input type="text" name="nazwisko" placeholder="Podaj nazwisko"><br><br>
        <select name="id_obywatelstwa">
    FORM;
    require_once 'connect.php';
    $sql = "SELECT * FROM `obywatelstwo`";
    $result = $connect->query($sql);
    while($row = $result->fetch_assoc()){
        echo "<option value=\"$row[id_obywatelstwa]\">$row[obywatelstwo]</option>";
    };
    ECHO <<<FORM
    </select><br><br>
    <input type="submit" value="Dodaj użytkownika">
    </form><br<<br>
    <a href="adamcala.php">Powrot</a><br>
FORM;
    $connect -> close();
