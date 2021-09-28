<?php 
    //print_r($_POST);
    if(!empty($_POST['name']) && !empty($_POST['geoFig'])){
        switch($_POST['geoFig']){
            case 'kwadrat':
                header('location: ./square.php');
                break;
            case 'prostokat':
                header('location: ./rectangle.php');
               break;
            }
    }
    else{
        ?>
            <script>
                history.back();
            </script>
        <?php
    }
?>