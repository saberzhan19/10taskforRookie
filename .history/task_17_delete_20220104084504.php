<?php 

session_start();

$id = $_GET['id'];
$name = $_GET['name'];
unlink("pictures/" . $name);


$pdo = new PDO("mysql:host=localhost;dbname=10taskrookie" , "root" , "");
    
    $sql = 'DELETE FROM images WHERE id = :id';
    
    $statement = $pdo->prepare($sql);
    $statement->execute('id'=> $id);


    
    
    header("Location: task_17.1.php");