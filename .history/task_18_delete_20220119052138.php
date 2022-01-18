<?php 

session_start();

$id=$_GET["id"];
$name=$_GET["name"];
unlink("nice/" . $name);

// if(file_exists("nice/" . $name)){
//     unlink("nice/" . $name);
// } 

$pdo = new PDO("mysql:host=localhost;dbname=10taskrookie" , "root" , "");

$das ="DELETE FROM face WHERE id=:id";

$sentence = $pdo->prepare($das);
$sentence->execute(['id'=>$id]); 

$das ="SELECT * FROM face";
$sentence = $pdo->prepare($das);
$sentence->execute();
$cartoons = $sentence->fetchAll(PDO::FETCH_ASSOC);

$_SESSION['creation'] = $cartoons;

header("Location: task_18.php");