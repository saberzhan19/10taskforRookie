<?php

for ($i=0; $i < count($_FILES['image']['name']); $i++) {
    download_image($_FILES['image']['name'][$i], $_FILES['image']['tmp_name'][$i]);
}


function download_image($image, $tmp_name){
    $decision = pathinfo($image) ;

    $image= uniqid() . "." .$decision['extension'];

    move_uploaded_file($tmp_name, 'uploads/' . $image);

    // header("Location: task_16.1.php");
}

// download_image($_FILES['image']);