<?php 

session_start();

$id=$_GET["id"];
$name=$_GET["name"];
unlink("nice/" . $name);

// if(file_exists("nice/" . $name)){
//     unlink("nice/" . $name);
// } 

$pdo = new PDO("mysql:host=localhost;dbname=10taskrookie" , "root" , "");

$sql ="DELETE FROM face WHERE id=:id";

$sentence = $pdo->prepare($sql);
$sentence->execute(['id'=>$id]); 

$sql ="SELECT * FROM face";
$sentence = $pdo->prepare($sql);
$sentence->execute();
$cartoons = $sentence->fetchAll(PDO::FETCH_ASSOC);

$_SESSION['creation'] = $cartoons;

header("Location: task_18.php");