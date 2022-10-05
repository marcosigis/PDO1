<?php
require_once '_connec.php';

$pdo = new \PDO(DSN, USER, PASS);

$query = 'SELECT * FROM story';
$statement = $pdo->query($query); 
$stories = $statement->fetchAll();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untold and unwanted stories</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <?php include 'include/header.html' ?>
   
    <main>
    <h1>Index</h1>
        <?php foreach($stories as $story) : ?>
            <div class="container-fluid">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $story["title"] ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $story["author"] ?></h6>
                        <p class="card-text"><?= $story["content"] ?></p>
                    </div>
                </div>
            </div>
            
        <?php endforeach ?>

    </main>

</body>
</html>