<?php


$dsn = 'mysql:dbname=blackbooks;host=127.0.0.1';
$user = 'non-root';
$password = "123";

$pdo = new PDO("mysql:dbname=blackbooks;host=127.0.0.1","non-root","123");

$statement = $pdo->query('select * from adherent');

$tables = $statement->fetchAll();

//try {
//    $dbh = new PDO($dsn, $user, $password);
//} catch (PDOException $e) {
//    echo 'Connexion échouée : ' . $e->getMessage();
//}
?>
