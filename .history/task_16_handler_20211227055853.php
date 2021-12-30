<?php

function download_image($image){
    $decision = pathinfo($image['name']) ;

    $imagename = uniqid() . "." .$decision['extension'];

    move_uploaded_file($image['tmp_name'], 'uploads/' . $imagename);

    header("Location: task_1")
}

download_image($_FILES['image']);