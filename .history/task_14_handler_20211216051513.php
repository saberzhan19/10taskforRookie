<?php 

session_start();

$email = $_POST['email'];
$password = $_POST['$password'];

$pdo = new PDO("mysql:host=localhost;dbname=10taskrookie", "root", "");
