<?php

session_start();

for ($i = 0; $i < count($_FILES['files']['name'][$i] ); $i++){
    received_art($_FILES['files']['name'][$i], $_FILES['files']['name'][$i]);
}

function received_art($sender, $tmp){

    $solute = pathinfo($sender);

    $ext = $solute['extension'];

    $sender = uniqid() . "." . $ext;

    move_uploaded_file($tmp, 'nice/' . $ext);


    $pdo = new PDO("mysql:host=localhost;dbname=10taskrookie", "root", "test");

    $sql = "INSERT INTO face (creation) VALUES (:creation)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['creation' => $sender]);

}

$pdo = new PDO("mysql:host=localhost;dbname=10taskrookie", "root", "");

$sql = "SELECT * FROM face";

$statement = $pdo->prepare($sql);
$statement->execute();
$cartoons = $pdo->fetchAll(PDO::FETCH_ASSOC);