<?php

session_start();

if(isset($_GET['logout'])) {
    session_destroy();
    header('Location: task_151.php');
    exit;