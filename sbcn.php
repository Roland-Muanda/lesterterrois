<?php
// Activation de la gestion des erreurs pour MySQLi
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Informations de connexion
    $host = 'fdb1027.biz.nf'; // Nom du serveur ou adresse IP de l'hôte
    $username = '4625589_briquesturques'; // Votre nom d'utilisateur MySQL
    $password = 'AAAaaa@@@111llL'; // Votre mot de passe MySQL
    $database = '4625589_briquesturques'; // Nom de la base de données

    // Établissement de la connexion
    $mysqli = new mysqli($host, $username, $password, $database);

    // Vérification de la connexion
    if ($mysqli->connect_error) {
        die("Erreur de connexion : " . $mysqli->connect_error);
    }

    // Encodage UTF-8 pour éviter les problèmes avec les caractères spéciaux
    $mysqli->set_charset('utf8mb4');

    // Message optionnel pour confirmer la connexion réussie (facultatif)
    // echo "Connexion réussie.";

} catch (mysqli_sql_exception $e) {
    die("Erreur critique : " . $e->getMessage());
}
?>