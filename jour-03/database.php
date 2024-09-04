<?php
$host = 'localhost';
$db   = 'lp_official';
$user = 'root'; 
$pass = 'root';
$charset = 'utf8mb4';  
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Connexion réussie ! <br>";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage() . "<br>";
}
?>
