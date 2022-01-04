<?php 
    require 'instances-of-objects.php';

    if(isset($_SESSION['userId'])){
        header('location: index.php');
    }

    if(!isset($_SESSION['userId'])){      
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $conn = $conn->connect();
    
        $sql = "select * from users where username = '{$username}' and password = '{$password}';";
        $query = $conn->prepare($sql);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_OBJ);
    
    
        if($query->rowCount()>0){
            $_SESSION['userId'] = $result->user_id;
            $_SESSION['username'] = $result->username;
            header('location: index.php');
        }else{
            header('location: log-in-view.php');
        }
    }
?>