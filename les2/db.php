<?php
class Database {
    public $pdo;
 
    public function __construct($db ="kpn", $host = "localhost:3306", $user = "root", $pass= "ROCDaniel123!") {
    try {
    $this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        echo "error: " . $e->getMessage();
     }
    }
    public function insert($naam, $email, $telefoonnummer){
        $stmt = $this->pdo->prepare("INSERT INTO klanten (naam, email, telefoonnummer) VALUES (?, ?, ?)");
        $stmt->execute([$naam, $email, $telefoonnummer]);
    }
}
$connectie = new Database();
?>