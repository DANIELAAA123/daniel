<?php

$host = 'localhost:3307';
$db   = 'winkel';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try 
{
    $pdo = new PDO($dsn, $user, $pass, $options);
} 
catch (\PDOException $e) 
{
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
session_start();

$_SESSION['product_code'] = array();




echo "Alle producten<br><";
$stmt = $pdo->query("SELECT * from producten");
while ($row = $stmt->fetch()) {
    echo "produccode" . $row['product_code']."<br>";
     echo "productnaam " . $row['product_naam']."<br>";
     echo "prijs per stuk " . $row['prijs_per_stuk']."<br>";
     echo "omschrijving " . $row['omschrijving']."<br><br>";
     $_SESSION['product_code'][] = $row['product_code'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="naam">
        <input type="text" name="email">
        <input type="submit" name="knop">
</form>
</body>
</html>