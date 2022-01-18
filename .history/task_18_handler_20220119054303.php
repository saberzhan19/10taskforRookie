<?php

session_start();

for ($i=0; $i < count($_FILES['file']['name']); $i++){
    send_cartoons($_FILES['file']['name']['$i'], $_FILES['file']['tmp_name']['$i']);
}

function send_cartoons($calling, $tmp_name) {

    $solution = pathinfo($calling);
    $extension = $solution['extension'];

    $calling = uniqid() . "." . $extension;

    move_uploaded_file($tmp_name, "nice/" .$calling);
    
    $pdo = new PDO("mysql:host=localhost;dbname=10taskrookie" , "root" , "");
    
    $sql = "INSERT INTO face(creation) VALUES (:creation)";

    $statement = $pdo->prepare($sql);
    $statement->execute(['creation' => $calling]);
    
      
}

$pdo = new PDO("mysql:host=localhost;dbname=10taskrookie", "root", "");

$sql = "SELECT * FROM face";

$statement = $pdo->prepare($sql);
$statement->execute();
$cartoons = $statement->fetchAll(PDO::FETCH_ASSOC);

$_SESSION['creation'] = $cartoons;

header("Location: task_18.php");

