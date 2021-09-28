<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <h3>Prostakat</h3>
        <form method="post">
            <input type="text" name="a" placeholder="Podaj bok a"><br><br>
            <input type="text" name="b" placeholder="Podaj bok b"><br><br>
            <input type="submit" value="oblicz">
        </form>
        <?php
            if(!empty($_POST['a'])&&!empty($_POST['b'])){
                $a=str_replace(',','.',_POST['a'];
                $area=$_POST['a']*$_POST['b'];
                $circuit=2*$_POST['a']+2*$_POST['b'];
                echo <<< RESULT
                    Pole prostokąta wynosi: $area cm<sup>2</sup><br>
                    Obwód prostokąta wynosi: $circuit
                RESULT;
                
            }
            else{
                echo "Wypełnij długości boków";
            }
        ?>
    </body>
</html>