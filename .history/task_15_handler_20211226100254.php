<?php

$email = $_POST['email'];
$password = $_POST['password'];

$pdo = new PDO('mysql:host=localhost;dbname=10taskrookie'; 'root', '');

$sql = 'SELECT * FROM lesson14 WHERE email = :email';

$statement = $pdo->prepare($sql);
$statement->execute(['email'=>$email]);

if(empty($task)){
    $message = "Неверный логин или пароль";
    $_SESSION['danger'] = $message;

    header("Location: task_15.php");
    exit;
} elseif (!password_verify($password, $task['password']) || $task['email'] !== $email){
    $message = 'Неверный логин или пароль';
    $_SESSION['danger'] = $message;
    
    header("Location: task_15.php");
    exit;
} elseif (password_verify($password, $task['password']) && $task['email'] == $email){
    $message = 'Здравствуйте, [$email]';
    $_SESSION['success'] = $message;  
    
}

