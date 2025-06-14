<?php
$servername = "fdb1027.biz.nf";  // 📌 Remplace par ton serveur MySQL si différent
$username = "4636001_roottarmakdweb";         // 📌 Nom d’utilisateur MySQL
$password = "AAAaaa@@@111llL";             // 📌 Mot de passe MySQL (si défini)
$dbname = "4636001_roottarmakdweb"; // 📌 Nom de ta base de données

// ✅ Connexion à MySQL
$mysqli = new mysqli($servername, $username, $password, $dbname);

// ✅ Vérification de la connexion
if ($mysqli->connect_error) {
    die("❌ Échec de la connexion : " . $mysqli->connect_error);
} else {
    echo "✅ Connexion réussie à la base de données !";
}
?>
