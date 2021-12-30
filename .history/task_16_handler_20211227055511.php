<?php

function download_image($image){
    $decision = pathinfo($image['name']) ;

    $imagename = uniqid() . "." .$decision['extension'];

    move_upload_file($image['tmp_name'], 'uploads/' . $imagename);
}

download_image($_FILE['image']);