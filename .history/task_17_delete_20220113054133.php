<?php 

session_start();

$id = $_GET['id'];
$p = $_GET['name'];
unlink("pictures/" . $namp);


$pdo = new PDO("mysql:host=localhost;dbname=10taskrookie" , "root" , "");
    
    $sql = 'DELETE FROM images WHERE id = :id';
    
    $statement = $pdo->prepare($sql);
    $statement->execute(['id'=> $id]);

    $sql = "SELECT * FROM images";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $images = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    $_SESSION['images'] = $images;
 
    
    // header("Location: task_17.1.php");