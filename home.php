<?php
    include("includes/auto_loader.inc.php");
    $check = new connect();
    $query = 'SELECT * FROM users_informations';

    try {
        $pdo = $check->connect_with_db();
        $stmt = $pdo->query($query);
        foreach ($stmt as $row) {
            if($row['username']==$_POST['username'] && $row['password']==$_POST['password']){
                echo 'connected';
            }
            else{
                header('Location: index.php');
            }
        }
    } catch (Exception $e) {
        echo 'Error!: ' . $e->getMessage();
    }