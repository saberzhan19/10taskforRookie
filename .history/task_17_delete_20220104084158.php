<?php 




$pdo = new PDO("mysql:host=localhost;dbname=10taskrookie" , "root" , "");
    
    $sql = 'DELETE FROM images WHERE id = :id';
    
    $statement = $pdo->prepare($sql);
    $statement->execute('id'=> $delete);
    
    header("Location: task_17.1.php");