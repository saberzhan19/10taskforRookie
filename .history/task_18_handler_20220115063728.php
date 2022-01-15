<?php

session_start();

for($i=0; $i< count($_FILES['wie']['name']); $i++){
    send_file($_FILES['wie']['name']['$i'], $_FILES['wie']['tmp_name']['$i']);
}

function send_file($sound_file, $tmp_name){

    $solution = pathinfo($sond_file);

    $sound_file = uniqid() . "." . $solution['extension'];

    move_uploaded_file($tmp_name, 'look/' . $sound_file);

    $pdo = new PDO("mysql:host=localhost;dbname=10taskrookie" , "root" , "");

    $sql = "INSERT INTO design(creation) VALUES (:creation)";

    $statement = $pdo->prepare($sql);
    $statement->execute(['creation'=>$sound_file]);
    

}

$das = new PDO("mysql:host=localhost;dbname=10taskrookie", "root", "");

$die = "SELECT * FROM design";

$der = $das->prepare($die);
$der ->execute();
$cartoons = $der->fetchAll(PDO::FETCH_ASSOC);

$_SESSION['art'] = $cartoons;

header("Location: task_18.php");



