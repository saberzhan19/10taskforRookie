<?php

session_start();



if(!isset($_SESSION['count'])){
	$_SESSION['count'] = 0;
}
if(isset($_POST['plus']))
{
        $_SESSION['count']++;
        header('Location:'.$_SERVER['PHP_SELF']);
}
