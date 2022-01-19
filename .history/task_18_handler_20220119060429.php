<?php

session_start();

for ($i=0; $i < count($_FILES['file']['name']); $i++){
    download_image($_FILES['file']['name']['$i'], $_FILES['file']['tmp_name']['$i']);
}

function download_image($calling_file, $tmp_name) {

    $de = pathinfo($calling_file);

    $calling_file = uniqid() . "." . $de['extension'];

    move_uploaded_file($tmp_name, "nice/" . $calling_file);
    
    $pdo = new PDO("mysql:host=localhost;dbname=10taskrookie" , "root" , "");
    
    $sql = "INSERT INTO face(creation) VALUES (:creation)";

    $statement = $pdo->prepare($sql);
    $statement->execute(['creation' => $calling_file]);
    
      
}

$pdo = new PDO("mysql:host=localhost;dbname=10taskrookie", "root", "");

$sql = "SELECT * FROM face";

$statement = $pdo->prepare($sql);
$statement->execute();
$cartoons = $statement->fetchAll(PDO::FETCH_ASSOC);

$_SESSION['creation'] = $cartoons;

header("Location: task_18.php");

