<?php
    require 'instances-of-objects.php';

    if(isset($_SESSION['userId'])){
        $wordId = $_POST['wordId'];

        $conn = $conn->connect();
    
        $sql = "delete from words where word_id = {$wordId};";
        $query = $conn->prepare($sql);
        $query->execute();
    
        if($query->rowCount()>0){
            echo 'Reč '.$wordId.' je uspešno obrisana.';
        }else{
            echo 'Brisanje nije uspelo!';
        }
    }else{
        echo 'Korisnik nije ulogovan!';
    }


?>