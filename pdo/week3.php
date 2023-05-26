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
    <label for="product_naam">product naam</label>
        <input type="text" name="product_naam" placeholder="product_naam">
        <br>
        <label for="prijs_per_stuk">prijs per stuk</label>
        <input type="text" name="prijs_per_stuk" placeholder="prijs_per_stuk">
        <br>
        <label for="omschrijving">omschrijving</label>
        <input type="text" name="omschrijving" placeholder="omschrijving">
        <br>
        <input type="submit" name="login"  value="product toevoegen">


<?php
$host = 'localhost:3307';
$db   = 'Winkel';
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
     echo "Connected to database " . $db;

     if (isset($_POST['login'])) {
        $product_naam = $_POST["product_naam"];
        $prijs_per_stuk = $_POST["prijs_per_stuk"];
        $omschrijving = $_POST["omschrijving"];
     }
     if (!empty($product_naam)) {
     $sql = "INSERT INTO producten (product_naam, prijs_per_stuk, omschrijving) VALUES (:product_naam, :prijs_per_stuk, :omschrijving)";
     $stmt= $pdo->prepare($sql);
     $stmt->bindParam(':product_naam', $product_naam, );
     $stmt->bindParam(':prijs_per_stuk', $prijs_per_stuk, );
     $stmt->bindParam(':omschrijving', $omschrijving, );
     if ( $stmt->execute()) {
        echo "goed";
     } else 
     {
        echo "niet goed";
     }
} 
}
catch (\PDOException $e) 
{
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
$pdo = null;
?>
</body>
</html>
