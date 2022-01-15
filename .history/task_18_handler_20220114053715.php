<?php

$pdo = new PDO("mysql:host=localhost;dbname=10taskrookie" , "root" , "");

$sql = "INSERT INTO design WHERE creation = :creation";

