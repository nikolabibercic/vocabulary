<?php
    require 'instances-of-objects.php';

    if(!isset($_SESSION['userId'])){
        header('location: index.php');
    }

    if(isset($_SESSION['userId'])){      
        if(isset($_POST['article'])){
            $article = $_POST['article'];
        }else{
            $article = '';
        }
        $newWord = $_POST['newWord'];
        $translate = $_POST['translate'];

        //Provara da li uneta rec i artikl postoji, ako postoji vraca poruku 2 ako ne ide dalje na insert
        $conn2 = $conn->connect();
        $sql2 = "select * from words where word = '{$newWord}' and article = '{$article}';";
        $query2 = $conn2->prepare($sql2);
        $query2->execute();
        $result2 = $query2->fetch(PDO::FETCH_OBJ);
        if($query2->rowCount()>0){
            header('location: index.php?insert=2');
        }else{
            //ako rec ne postoji radi insert
            $conn = $conn->connect();
            $sql = "insert into words(article,word,translate) values('{$article}','{$newWord}','{$translate}');";
            $query = $conn->prepare($sql);
            $query->execute();
        
            if($query->rowCount()>0){
                header('location: index.php?insert=1');
            }else{
                header('location: index.php?insert=0');
            }
        }
    }
?>