<?php 

session_start();

$text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost;dbname=10taskrookie", "root", "");

$sql = "INSERT INTO sendler (text) VALUES (:text)";

$statement = $pdo->prepare($sql);
$statement->execute([ 'text' => $text  ]);

$message = 'Ваше сообщение выводиться тут';
$_SESSION ['info'] = $message; 

header("Location: task_12.php");


