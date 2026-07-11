<?php
// Paramètres de connexion
$host = 'localhost';
$dbname = 'scanpresence'; 
$user = 'root';
$pass = ''; 

try {
    // Création de l'objet PDO pour communiquer avec MySQL
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    
    // On demande à PHP d'afficher les erreurs SQL s'il y en a
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
