<?php

session_start();

for ($i=0; $i < count($_FILES['file']['name']); $i++){
    send_cartoons($_FILES['file']['name']['$i'], $_FILES['file']['tmp_name']['$i']);
}

function send_cartoons($sound_file, $tmp_name) {

    $solution = pathinfo($sound_file);
    $extension = $solution['extension'];

    $sound_file = uniqid() . "." .$extension;

    move_uploaded_file($tmp_name, '/nice/' .$sound_file);
    
    $pdo = new PDO("mysql:host=localhost;dbname=10taskrookie" , "root" , "");
    
    $sql = "INSERT INTO face(creation) VALUES (:creation)";

    $sentence = $pdo->prepare($sql);
    $sentence->execute(['creation' => $sound_file]);
    
      
}

$pdo = new PDO("mysql:host=localhost;dbname=10taskrookie", "root", "");

$sql = "SELECT * FROM face";

$sentence = $pdo->prepare($sql);
$sentence->execute();
$cartoons = $sentence->fetchAll(PDO::FETCH_ASSOC);

$_SESSION['creation'] = $cartoons;

header("Location: task_18.php");

