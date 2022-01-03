<?php

session_start();


for ($i=0; $i < count($_FILES['paper']['name']); $i++) {
    download_image($_FILES['paper']['name'][$i], $_FILES['paper']['tmp_name'][$i]);
}


function download_image($ca, $tmp_name){
    $decision = pathinfo($ca) ;


    $ca = uniqid() . "." . $decision['extension'];

    move_uploaded_file($tmp_name, 'downloads/' . $ca);

    $pdo = new PDO("mysql:host=localhost;dbname=10taskrookie;" , "root" , "");

    $sql = "INSERT INTO images(image) VALUES (:image)";
    
    $statement = $pdo->prepare($sql);
    $statement->execute(['image' => $ca]);

    move_uploaded_file($tmp_name, 'downloads/' . $ca);

}

$pdo = new PDO("mysql:host=localhost;dbname=10taskrookie" , "root" , "");

$sql = 'SELECT * FROM images';

$statement = $pdo->prepare($sql);
$statement->execute();
$pictures = $statement->fetchAll(PDO::FETCH_ASSOC);

$_SESSION['images'] = $pictures;

header("Location: task_16.1.php");
