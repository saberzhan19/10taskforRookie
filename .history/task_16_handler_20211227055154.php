<?php

function download_image($image){
    $decision = pathinfo($image['name']) ;

    $imagename = uniqid() . "." . $decision['extension'];

    move_upload_file($image['tp_name']), 'uploads/' . $imagename
}