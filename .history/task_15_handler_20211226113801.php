<?php



$email = $_POST['email'];
$password = $_POST['password'];

$pdo = new PDO('mysql:host=localhost;dbname=10taskrookie;', 'root', '');

$sql = 'SELECT * FROM lesson_14 WHERE email = :email';

$statement = $pdo->prepare($sql);
$statement->execute(['email'=>$email]);
$task = $statement->fetch(PDO::FETCH_ASSOC);

if(empty($task)){
    $message = "Неверный логин или пароль";
    $_SESSION['danger'] = $message;

    header("Location: task_15.1.php");
    exit;
} elseif (!password_verify($password, $task['password']) || $task['email'] !== $email){
    $message = 'Неверный логин или пароль';
    $_SESSION['danger'] = $message;
    
    header("Location: task_15.1.php");
    exit;
} elseif (password_verify($password, $task['password']) && $task['email'] == $email){
    $message = 'Здравствуйте, ' . $task['email'];
    $_SESSION['success'] = $message;  
    
}

