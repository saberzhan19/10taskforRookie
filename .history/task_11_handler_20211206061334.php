<?php

session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $pdo = new PDO("mysql:host=localhost;dbname=10taskrookie;", "root" , "");

    $sql = "SELECT * FROM users WHERE email = :email, password = :password";
    $statement = $pdo->prepare($sql);
    $statement->execute([
        'email' => $email,
        'password' => $password    
    ]);
    $task = $statement->fetch(PDO::FETCH_ASSOC);

    if(!empty($task)){
        $message = "Этот эл адрес уже занят другим пользователем";
        $_SESSION['danger'] = $message;

        header("Location: task_11.php");
        exit;
    }
    
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password) ";
    
    $statement = $pdo->prepare($sql);
    $statement->execute([
        'email' => $email,
        'password' => $password
    ]);

    $message = "You are welcome!";
    $_SESSION['success'] = $message;

    header("Location: task_11.php");
