<?php

    session_start();

    $text = $_POST['text'];

    $pdo = new PDO("mysql:host=localhost;dbname=10taskrookie;", "root" , "");

    $sqk = "SELECT * FROM sendler WHERE text = :text";
    $statement = $pdo->prepare($sql);
    $statement->execute(['text' => $text]);
    $task = $statement->fetch(FETCH::PDO_ASSOC);

    if(!empty($task)){
        $message = "You should check in on some of those fields below.";
        $_SESSION['message'] = $message;

        hea
    }
    
    $sql = "INSERT INTO sendler (text) VALUES (:text) ";
    
    $statement = $pdo->prepare($sql);
    $statement->execute(['text' => $text]);


    header("Location: task_10.php");
    exit;

?>