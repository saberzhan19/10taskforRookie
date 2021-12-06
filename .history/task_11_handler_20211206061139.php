<?php

session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $pdo = new PDO("mysql:host=localhost;dbname=10taskrookie;", "root" , "");

    $sql = "SELECT * FROM users WHERE email = :email, password = :password";
    $statement = $pdo->prepare($sql);
    $statement->execute([
        'email' => $email,
        'password' =>     
    ]);
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
