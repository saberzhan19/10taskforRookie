<?php 

session_start();

$id=$_GET["id"];
$name=$_GET["name"];

if(file_exists("look/" . $name)){
    unlink("look/" . $name);
} 

$die = new PDO("mysql:host=localhost;dbname=10taskrookie" , "root" , "");

$das ="DELETE FROM da WHERE id=:id";

$sentence = $die->prepare($das);
$sentence->execute(['id'=>$id]); 

$das ="SELECT * FROM da";
$sentence = $die->prepare($das);
$sentence->execute();
$cartoons = $sentence->fetchAll(PDO::FETCH_ASSOC);

$_SESSION['da'] = $cartoons;

header("Location: task_18.php");