<?php 

session_start();

$id=$_GET["id"];
$name=$_GET["name"];
// unlink("nice/" . $name);

// if(file_exists("nice/" . $name)){
//     unlink("nice/" . $name);
// } 

$pdo = new PDO("mysql:host=localhost;dbname=10taskrookie" , "root" , "");

$sql ="DELETE FROM face WHERE id=:id";

$statement = $pdo->prepare($sql);
$statement->execute(['id' => $id]); 

$sql ="SELECT * FROM face";
$statement = $pdo->prepare($sql);
$statement->execute();
$cartoons = $statement->fetchAll(PDO::FETCH_ASSOC);

$_SESSION['face'] = $cartoons;

header("Location: task_18.php");