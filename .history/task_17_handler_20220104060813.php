<?php

session_start();


for ($i=0; $i < count($_FILES['paper']['name']); $i++) {
    download_image($_FILES['paper']['name'][$i], $_FILES['paper']['tmp_name'][$i]);
}


function download_image($calling_file, $tmp_name){
    $decision = pathinfo($calling_file) ;


    $calling_file = uniqid() . "." . $decision['extension'];

    move_uploaded_file($tmp_name, 'ps/' . $calling_file);

    $pdo = new PDO("mysql:host=localhost;dbname=10taskrookie;" , "root" , "");

    $sql = "INSERT INTO images(picture) VALUES (:picture)";
    
    $statement = $pdo->prepare($sql);
    $statement->execute(['picture' => $calling_file]);

    move_uploaded_file($tmp_name, 'pictures/' . $calling_file);

}

$pdo = new PDO("mysql:host=localhost;dbname=10taskrookie" , "root" , "");

$sql = 'SELECT * FROM images';

$statement = $pdo->prepare($sql);
$statement->execute();
$pictures = $statement->fetchAll(PDO::FETCH_ASSOC);

$_SESSION['images'] = $pictures;

header("Location: task_17.1.php");