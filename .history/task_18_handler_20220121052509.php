<?php

session_start();

for ($i = 0; $i < count($_FILES['files']['name']); $i++){
    received_art($_FILES['files']['name'][$i], $_FILES['files']['tmp_name'][$i]);
}

function received_art($sender, $tmp){

    $solute = pathinfo($sender);

    $ext = $solute['extension'];

    $sender = uniqid() . "." . $ext;

    move_uploaded_file($tmp, 'nice/' . $sender);


    $host = new PDO("mysql:host=localhost;dbname=10taskrookie", "root", "");

    $bd = "INSERT INTO face (creation) VALUES (:creation)";
    $ex = $host->prepare($bd);
    $ex->execute(['creation' => $sender]);

}

$host = new PDO("mysql:host=localhost;dbname=10taskrookie", "root", "");

$bd = "SELECT * FROM face";

$ex = $host->prepare($bd);
$ex->execute();
$cartoons = $ex->fetchAll(PDO::FETCH_ASSOC);

$_SESSION['face'] = $cartoons;

header("Location: task_18.php");