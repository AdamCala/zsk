<?php 
    //print_r($_POST);
    if(!empty($_POST['name']) && !empty($_POST['geoFig'])){
        switch($_POST['geoFig']){
            case 'kwadrat':
                echo 'kwadrat';
                break;
            case 'prostokat':
                echo 'prostokat';
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