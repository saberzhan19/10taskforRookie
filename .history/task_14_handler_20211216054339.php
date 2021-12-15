<?php 

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$pdo = new PDO("mysql:host=localhost;dbname=10taskrookie", "root", "");

$sql = "SELECT * FROM lesson_14 WHERE email = :email AND password = :password";
    $statement = $pdo->prepare($sql);
    $statement->execute([
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT)
    ]);
    $task = $statement->fetch(PDO::FETCH_ASSOC);

    if(!empty($task)){
        $message = "Неверный логин или пароль";
        $_SESSION['danger'] = $message;

        header("Location: task_14.php");
        exit;
    }

    if(password_verify($password,$hash)) ? 
    
    $sql = "INSERT INTO lesson_14 (email, password) VALUES (:email, :password) ";
    
    $statement = $pdo->prepare($sql);
    $statement->execute([
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT)
    ]);

    $message = "You are welcome!";
    $_SESSION['success'] = $message;

    header("Location: task_14.php");