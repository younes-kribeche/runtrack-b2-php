<?php
$host = 'localhost';      // Adresse du serveur de base de données
$db   = 'lp_official'; // Nom de la base de données
$user = 'root';    // Nom d'utilisateur
$pass = 'root';   // Mot de passe
$charset = 'utf8mb4';     // Jeu de caractères (utf8mb4 pour un support complet des caractères UTF-8)
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Connexion réussie !";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
