<?php

session_start();


for ($i=0; $i < count($_FILES['file']['name']); $i++) {
    download_image($_FILES['file']['name'][$i], $_FILES['file']['tmp_name'][$i]);
}


function download_image($filename, $tmp_name){
    $decision = pathinfo($filename) ;


    $filename = uniqid() . "." . $decision['extension'];

    move_uploaded_file($tmp_name, 'downloads/' . $filename);

    $pdo = new PDO("mysql:host=localhost;dbname=10taskrookie;" , "root" , "");

    $sql = "INSERT INTO images(image) VALUES (:image)";
    
    $statement = $pdo->prepare($sql);
    $statement->execute(['file' => $filename]);

    move_uploaded_file($tmp_name, 'downloads/' . $filename);

}

$pdo = new PDO("mysql:host=localhost;dbname=10taskrookie" , "root" , "");

$sql = 'SELECT * FROM images';

$statement = $pdo->prepare($sql);
$statement->execute();
$pictures = $statement->fetchAll(PDO::FETCH_ASSOC);

$_SESSION['images'] = $pictures;

header("Location: task_16.1.php");
