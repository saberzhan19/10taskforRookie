<?php

function download_image($image){
    $decision = pathinfo($image['name']) ;

    $imageename = uniqid() . "." . $decision['extension'];

    move_upload_file($image)
}