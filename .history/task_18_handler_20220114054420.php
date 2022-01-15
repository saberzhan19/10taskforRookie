<?php

session_start();

for($i=0; $i< count($_FILES['file']['name']); $i++){
    send_file()
}

function send_file()


$pdo = new PDO("mysql:host=localhost;dbname=10taskrookie" , "root" , "");

$sql = "INSERT INTO design WHERE creation = :creation";

$statement = prepare->$pdo(),
$statement->execute($sql),
