<?php

session_start();

for ($i=0; $i < count($_FILES['file']['name']); $i++){
    send_cartoons($_FILES['file']['name']['$i'], $_FILES['file']['tmp_name']['$i']);
}

function send_cartoons($sound, $tm) {

    $solution = pathinfo($sound);

    $sound = uniqid() . "." .$solution['extension'];

    move_uploaded_file($tm, 'look/' . $sound);

    $pdo = new PDO("mysql:host=localhost;dbname=10taskrookie" , "root" , "");

    $sql = "INSERT INTO design(creation) VALUES (:creation)";

    $sentence = $pdo->prepare($sql);
    $sentence->execute(['creation' => $sound]);
    
      
}

$pdo = new PDO("mysql:host=localhost;dbname=10taskrookie", "root", "");

$sql = "SELECT * FROM design";

$sentence = $pdo->prepare($sql);
$sentence->execute();
$cartoons = $sentence->fetchAll(PDO::FETCH_ASSOC);

$_SESSION['design'] = $cartoons;

header("Location: task_18.php");



