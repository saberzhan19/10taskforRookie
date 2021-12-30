<?php

for ($i=0; $i < count($_FILES))



function download_image($image){
    $decision = pathinfo($image['name']) ;

    $imagename = uniqid() . "." .$decision['extension'];

    move_uploaded_file($image['tmp_name'], 'uploads/' . $imagename);

    header("Location: task_16.1.php");
}

// download_image($_FILES['image']);