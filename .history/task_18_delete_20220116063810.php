<?php 

session_start();

$id=$_GET["id"];
$name=$_GET["name"];

if(file_exists($name)) ?