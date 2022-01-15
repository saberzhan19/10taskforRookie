<?php

session_start();

for($i=0; $i< count($_FILES['file']['name']); $i++){
    send_file($_FILES['file']['name']['$i'], $_FILES['file']['tmp_name']['$i']);
}

function send_file($sound_file, $tmp_name){

    $solution = pathinfo($sond_file);

    $sound_file = uniqid() . ""

    $pdo = new PDO("mysql:host=localhost;dbname=10taskrookie" , "root" , "");

    $sql = "INSERT INTO design WHERE creation = :creation";

    $statement = prepare->$pdo(),
    $statement->execute($sql),


}


