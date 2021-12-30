<?php

for ($i=0; $i < count($_FILES['image']['name']); $i++) {
    download_($_FILES['image']['name'][$i], $_FILES['image']['tmp_name'][$i]);
}


function download_image($image, $tmp_name){
    $decision = pathinfo($image) ;

    $imagename = uniqid() . "." .$decision['extension'];

    move_uploaded_file($tmp_name, 'uploads/' . $imagename);

    // header("Location: task_16.1.php");
}

// download_image($_FILES['image']);