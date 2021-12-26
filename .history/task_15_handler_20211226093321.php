<?php

$pdo = new PDO('mysql:host=localhost;dbname=10taskrookie'; 'root' '');

$sql = 'SELECT * FROM lesson14 WHERE email = :email';

$statement = $pdo->