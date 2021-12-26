<?php

$email = $_POST[]

$pdo = new PDO('mysql:host=localhost;dbname=10taskrookie'; 'root' '');

$sql = 'SELECT * FROM lesson14 WHERE email = :email';

$statement = $pdo->prepare($sql);
$statement->execute(['email'=>$email]);