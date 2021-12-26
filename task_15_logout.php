<?php

session_start();

if(isset($_GET['logout'])) {
    session_destroy();
    header('Location: task_15.1.php');
    exit;
}