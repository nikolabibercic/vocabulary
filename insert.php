<?php
    require 'instances-of-objects.php';

    if(!isset($_SESSION['userId'])){
        header('location: index.php');
    }

    if(isset($_SESSION['userId'])){      
        if(isset($_POST['article'])){
            $article = $_POST['article'];
        }else{
            $article = null;
        }
        $newWord = $_POST['newWord'];
        $translate = $_POST['translate'];
    
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
?>