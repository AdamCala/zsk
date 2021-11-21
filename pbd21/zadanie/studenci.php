<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Document</title>
</head>
<body>
    <?php

        require_once 'connect.php';

        $sql = "SELECT * FROM `studenci` INNER JOIN `obywatelstwo` ON `studenci`.`id_obywatelstwa` = `obywatelstwo`.`id_obywatelstwa`";

        $result = $connect->query($sql);

        echo <<<TABLE
        <table>
            <tr>
                <th>Imie</th>
                <th>Nazwisko</th>
                <th>Obywatelstwo</th>
            </tr>
        </table>
        TABLE;

        while($row = $result->fetch_assoc()){
            echo <<<ROW
            <table>
                <tr>
                    <td>$row[imie]</td>
                    <td>$row[nazwisko]</td>
                    <td>$row[obywatelstwo]</td>
                </tr>
            <table>
            ROW;
        }
        $connect -> close();
    ?>
    <br><br>
    <a href="adamcala.php">Powrot</a><br>
</body>
</html>