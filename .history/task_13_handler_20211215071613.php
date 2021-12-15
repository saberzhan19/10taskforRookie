<?php

session_start();

if(!isset($_SESSION['count'])){
	$_SESSION['count'] = 0;
}
if(isset($_GET['plus']))
{
        $_SESSION['count']++;
        header('Location:']);
}