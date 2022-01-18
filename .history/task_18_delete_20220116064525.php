<?php 

session_start();

$id=$_GET["id"];
$name=$_GET["name"];

if(file_exists("look/" . $name)) ? unlink("look/" . $name) : "";

$die = new PDO("mysql:host=localhost;dbname=10taskrookie" , "root" , "");

$das ="DELETE FROM design WHERE id=:id";

$sentence = $due->prepare($das);
$sentence->execute(['id'=>$id]); 

$das ="SELECT * FROM design";
$sentence = $due->prepare($das);
$sentence->execute();
$