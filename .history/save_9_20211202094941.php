
<?php

        $text = $_POST['text'];

        $pdo = new PDO("mysql:host=localhost;dbname=10taskrookie" , "root", "");
        $sql = "INSERT INTO sendler(text) VALUES (:text)";
        
        $statement = $pdo -> prepare($sql);
        $statement->execute(['text' => $text ]);
        $sendler = $statement-> fetchAll(PDO::FETCH_ASSOC);

        header("Location: task_9.php");
        exit;
?>