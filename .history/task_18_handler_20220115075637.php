<?php

session_start();

for($i=0; $i< count($_FILES['file']['name']); $i++){
    send_cartoons($_FILES['file']['name']['$i'], $_FILES['file']['tmp_name']['$i']);
}

function send_cartoons($sound_file, $tmp_name){

    $solution = pathinfo($sond_file);

    $sound_file = uniqid() . "." . $solution['extension'];



    $pdo = new PDO("mysql:host=localhost;dbname=10taskrookie" , "root" , "");

    $sql = "INSERT INTO design(creation) VALUES (:creation)";

    $sentence = $pdo->prepare($s);
    $der->execute(['creation'=>$sound_file]);
    
    move_uploaded_file($tmp_name, 'look/' . $sound_file);    
}

$das = new PDO("mysql:host=localhost;dbname=10taskrookie", "root", "");

$die = "SELECT * FROM design";

$der = $das->prepare($die);
$der ->execute();
$cartoons = $der->fetchAll(PDO::FETCH_ASSOC);

$_SESSION['art'] = $cartoons;

header("Location: task_18.php");



