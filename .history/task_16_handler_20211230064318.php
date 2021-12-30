<?php

session_start();


for ($i=0; $i < count($_FILES['image']['name']); $i++) {
    download_image($_FILES['image']['name'][$i], $_FILES['image']['tmp_name'][$i]);
}


function download_image($image, $tmp_name){
    $decision = pathinfo($image) ;

    $image = uniqid() . "." . $decision['extension'];

    move_uploaded_file($tmp_name, 'downloads/' . $image);

    $pdo = new PDO("mysql:host=localhost;dbname=10taskrookie" , "root" , "");

    $sql = "INSERT INTO images(image) VALUES (:image)";
    
    $statement = $pdo->prepare($sql);
    $statement->execute(['image' => $image]);

    move_uploaded_file($tmp_name, 'downloads/', $image)

}

header("Location: task_16.1.php");
