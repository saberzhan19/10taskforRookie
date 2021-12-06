<?php

session_start();

    $text = $_POST['text'];
    $text = $_POST['text'];

    $pdo = new PDO("mysql:host=localhost;dbname=10taskrookie;", "root" , "");

    $sql = "SELECT * FROM sendler WHERE text = :text";
    $statement = $pdo->prepare($sql);
    $statement->execute(['text' => $text]);
    $task = $statement->fetch(PDO::FETCH_ASSOC);

    if(!empty($task)){
        $message = "You should check in on some of those fields below.";
        $_SESSION['danger'] = $message;

        header("Location: task_10.php");
        exit;
    }
    
    $sql = "INSERT INTO sendler (text) VALUES (:text) ";
    
    $statement = $pdo->prepare($sql);
    $statement->execute(['text' => $text]);

    $message = "You are welcome!";
    $_SESSION['success'] = $message;

    header("Location: task_10.php");
