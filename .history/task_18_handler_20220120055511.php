<?php

session_start();

for ($i = 0; $i < count($_FILES['files']['name'][$i] ); $i++){
    recived_art($_FILES['files']['name'][$i], $_FILES['files']['name'][$i]);
}

function recived_art($sender)