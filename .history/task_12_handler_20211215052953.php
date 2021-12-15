<?php 

session_start();

$text = $_POST ['text'];

$pdo = new PDO("mysql:host=localhost;dbname=10taskrookie", "root", "");

$sql = "INSERT INTO sendler WHERE text = :text";

$statement = $pdo->prepare($sql);
$statement->execute([
    $text => 'text'
]);

// 1. Вариант

function display_flash_message($name, $message){
    
    $_SESSION[$name] = $message; 

};
