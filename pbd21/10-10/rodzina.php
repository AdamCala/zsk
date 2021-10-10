<!DOCTYPE html>
<html lang="PL-pl">
    <head>
        <meta charset=utf-8>
    </head>
    <body>
        <?php
            if(!isset($_POST['person'])&&!isset($_POST['buttonAVG'])){
                echo <<< FORMCOUNTPERSON
                <h3>Ilość osób w rodzinie</h3>
                <form method="post">
                <input type="number" name="person" placeholder="Podaj ilość osób:"><br><br>
                <input type="submit" value="zatwierdz">
                </form>
                FORMCOUNTPERSON;
            }
        ?>
        <?php
        if(!empty($_POST['person'])){
            echo "<h3>Ilość osó w rodzinie: $_POST[person]</h3>";
            echo <<<FORMAGEPERSON
            <form method="post">
            FORMAGEPERSON;
            $count = $_POST['person'];
            for($i=1;$i<=$count;$i++){
                echo "<input type='number>' name='person$i' placeholder='Podaj wiek osoby nr $i'><br><br>"  ;
            }
            echo <<<AGE
            <input type="submit" name="buttonAVG" value="oblicz">
            </form>
            AGE;
        }
        if(isset($_POST['buttonAVG'])){
            $avg=0;
            $count=0;
            foreach($_POST as $key=>$value){
                if($key!='buttonAVG'){
                    $count++;
                    $avg+=$value;
                }
            }
            echo "Średni wiek ".number_format($avg/$count,2," ")."<br>";
        }
        ?>
    </body>
</html>