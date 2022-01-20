<?php

session_start();

for ($i = 0; $i < count($_FILES['files']['name'][$i] ); $i++){
    received_art($_FILES['files']['name'][$i], $_FILES['files']['name'][$i]);
}

function received_art($sender, $tmp){

    $solute = pathinfo($sender);

    $ext = $solute['extension'];

    move


}