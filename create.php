<?php
require_once '_connec.php';
$pdo = new \PDO(DSN, USER, PASS);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Create your story</title>
</head>
<body>
<?php include 'include/header.html' ?>
<form class="form" action="/storycreated.php"  method="post">
            <div class="form-group">
                <label for="title"></label><br>
                <input id="title" type="text" name="title" placeholder="title"/>
            
            </div>
            <div class="form-group">
                <label for="author"></label><br>
                <input id="author" type="text" name="author" placeholder="author" />
            </div>
            <div class="form-group">
                <label for="content"></label><br>
                <input id="content" type="textarea" name="content" placeholder="content" />
            </div>
            <div >
                <button type="submit" class="btn btn-primary">Send story!</button>
            </div>
</form>
</body>
</html>

