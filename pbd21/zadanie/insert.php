<?php
    if(!empty($_POST)){
        foreach($_POST as $key => $value){
            if(empty($value)){
                header('location: dodaj_studenta.php?error=Wypełnij wszystklie pola');
                exit();
            }
        }
    }
    
    require_once 'connect.php';

    $sql = "INSERT INTO `studenci`(`id_studenta`,`imie`,`nazwisko`,`id_obywatelstwa`) VALUES (NULL,'$_POST[imie]','$_POST[nazwisko]','$_POST[id_obywatelstwa]')";
    $connect -> query($sql);

    if($connect->affected_rows>0){
        header('location: dodaj_studenta.php?error=Dodanu usera');
    }else{
        header('location: dodaj_studenta.php?error=Nie dodano usera');
    }

    $connect -> close();
