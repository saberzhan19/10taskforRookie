<?php

function download_image($image){
    $decision = pathinfo($image['name']) ;

    $filename = uniqid() . "." . $decision['extension'];
}