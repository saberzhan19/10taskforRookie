<?php

session_start();


for ($i=0; $i < count($_FILES['file']['name']); $i++) {
    download_image($_FILES['file']['name'][$i], $_FILES['file']['tmp_name'][$i]);
}


function download_image($calling_file, $tmp_name){
    $decision = pathinfo($calling_file) ;


    $calling_file = uniqid() . "." . $decision['extension'];

    $move = move_uploaded_file($tmp_name, 'pictures/' . $calling_file);

    
    $pdo = new PDO("mysql:host=localhost;dbname=10taskrookie;" , "root" , "");

    $sql = "INSERT INTO images(decoration) VALUES (:decoration)";
    
    $statement = $pdo->prepare($sql);
    $statement->execute(['decoration' => $calling_file]);

    move_uploaded_file($tmp_name, 'pictures/' . $calling_file);

}

if( 0 < $_FILES['file']['error'])


$pdo = new PDO("mysql:host=localhost;dbname=10taskrookie" , "root" , "");

$sql = 'SELECT * FROM images';

$statement = $pdo->prepare($sql);
$statement->execute();
$pictures = $statement->fetchAll(PDO::FETCH_ASSOC);

$_SESSION['images'] = $pictures;

header("Location: task_17.1.php");


