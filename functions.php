<?php


functions add_user($email,$password){

    $email = $_SESSION["email"];
    $password = $_SESSION["password"];

    $pdo = new PDO("mysql:host=localhost;dbname=10taskrookie", "root", "");

    $sql = "INSERT INTO lesson_14 (email, password) VALUES (:email,:password)";

    $statement = $pdo->prepare($sql);
    $statement->execute([
        'email'=> $email,
        'password'=> password_hash($password, PASSWORD_DEFAULT)
    ]);
    
    
}

functions 