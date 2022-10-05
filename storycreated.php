<?php
require_once '_connec.php';
$pdo = new \PDO(DSN, USER, PASS);

$title = trim($_POST['title']); 
$author = trim($_POST['author']);
$content = trim($_POST['content']);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Story created</title>
</head>
<body>
    <?php include 'include/header.html' ?>
    <?php 

if (empty($title)) {
    echo "error title";
    echo $title;
} else {

$query = 'INSERT INTO story (title, author, content) VALUES (:title, :author, :content)';
$statement = $pdo->prepare($query);

$statement->bindValue(':title', $title, \PDO::PARAM_STR);
$statement->bindValue(':author', $author, \PDO::PARAM_STR);
$statement->bindValue(':content', $content, \PDO::PARAM_STR);

$statement->execute();
}
    
    
    ?>


</body>
</html>