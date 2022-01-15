<?php

session_start();






$pdo = new PDO("mysql:host=localhost;dbname=10taskrookie" , "root" , "");

$sql = "INSERT INTO design WHERE creation = :creation";

$statement = prepare->$pdo(),
$statement->execute($sql),
