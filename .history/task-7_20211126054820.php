<?php 


$pdo = new PDO("mysql:host=localhost;dbname=10taskrookie", "root", "");

$sql = "INSERT INTO programmers (name, proffesion, email) VALUES (:name, :proffesion, :email)"