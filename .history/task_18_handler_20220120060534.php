<?php

session_start();

for ($i = 0; $i < count($_FILES['files']['name'][$i] ); $i++){
    received_art($_FILES['files']['name'][$i], $_FILES['files']['name'][$i]);
}

function received_art($sender, $tmp){

    $solute = pathinfo($sender);

    $ext = $solute['extension'];

    move_uploaded_file($tmp, 'nice/' . $ext);


    $pdo = new PDO("mysql:host=localhost;dbname=10taskrookie", "root", "test");

    $sql = ""

}