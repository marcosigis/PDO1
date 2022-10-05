<?php
require_once '_connec.php';
$pdo = new \PDO(DSN, USER, PASS);

$query = "DELETE FROM story WHERE title = '';";


$pdo->exec($query);

