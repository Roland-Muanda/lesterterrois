<?php
// ✅ Activation de la session sécurisée
if (session_status() === PHP_SESSION_NONE) {
    session_start();
    session_regenerate_id(true);
}

// ✅ Définition du message de sécurité
$security_message = "<p style='color:green; font-weight:bold;'>Sécurité activée ✅</p>";

// ✅ Ajout d'en-têtes HTTP pour renforcer la sécurité
if (!headers_sent()) {
    header('X-Frame-Options: DENY'); // Bloque le Clickjacking
    header('X-XSS-Protection: 1; mode=block'); // Active la protection XSS
    header('X-Content-Type-Options: nosniff'); // Empêche le chargement incorrect de fichiers
    header("Cache-Control: no-store, no-cache, must-revalidate"); // Désactive le cache sur les pages sensibles
    header("Pragma: no-cache");
}

// ✅ Connexion sécurisée à la base de données
require_once 'sbcn.php';

if (!$mysqli) {
    $security_message = "<p style='color:red; font-weight:bold;'>⚠️ Menace détectée : Erreur de connexion à la base de données !</p>";
}

// ✅ Sécurisation des entrées utilisateur contre les attaques
if (!function_exists('secure_input')) {
    function secure_input($data) {
        return htmlspecialchars(strip_tags(trim($data)));
    }
}
$_POST = array_map('secure_input', $_POST);
$_GET = array_map('secure_input', $_GET);

// ✅ Vérification de l’origine des requêtes (anti-CSRF)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!isset($_SERVER["HTTP_REFERER"]) || parse_url($_SERVER["HTTP_REFERER"], PHP_URL_HOST) !== $_SERVER["HTTP_HOST"]) {
        log_security_incident("CSRF détecté", "Requête POST suspecte.");
        exit("<p style='color:red; font-weight:bold;'>⚠️ Menace détectée : Requête non autorisée !</p>");
    }
}

// ✅ Fonction pour enregistrer un incident de sécurité
if (!function_exists('log_security_incident')) {
    function log_security_incident($type, $details) {
        $log_entry = date("Y-m-d H:i:s") . " | IP : " . $_SERVER["REMOTE_ADDR"] . " | User-Agent : " . $_SERVER["HTTP_USER_AGENT"] . " | Type : $type | Détails : $details\n";
        file_put_contents("security_log.txt", $log_entry, FILE_APPEND);
    }
}

// ✅ Détection des attaques SQL Injection et attaques par URL
$blacklist_patterns = ["DROP", "DELETE", "UNION", "INSERT", "--", "'"];
foreach ($_REQUEST as $param => $value) {
    foreach ($blacklist_patterns as $pattern) {
        if (stripos($value, $pattern) !== false) {
            log_security_incident("Tentative d'attaque par URL", "Paramètre suspect : " . $value);
            exit("<p style='color:red; font-weight:bold;'>⚠️ Menace détectée : Requête interdite !</p>");
        }
    }
}

if (isset($_SERVER['HTTP_USER_AGENT']) && preg_match('/bot|crawler|spider/i', $_SERVER['HTTP_USER_AGENT'])) {
    log_security_incident("Bot détecté", "User-Agent : " . $_SERVER['HTTP_USER_AGENT']);
    exit("<p style='color:red; font-weight:bold;'>⚠️ Menace détectée : Accès interdit aux bots !</p>");
}

// ✅ Sécurisation des fichiers sensibles
if (basename(__FILE__) == $_SERVER["SCRIPT_FILENAME"]) {
    exit("<p style='color:red; font-weight:bold;'>❌ Accès interdit !</p>");
}

// ✅ Simulation Cypher sécurisée
$graphe = [
    "Alice" => ["relation" => "ami", "cible" => "Bob"],
    "Bob" => ["relation" => "travaille_avec", "cible" => "Charlie"],
    "Charlie" => ["relation" => "ami", "cible" => "Alice"]
];

// ✅ Vérification avant déclaration de `cypher_simulate`
if (!function_exists('cypher_simulate')) {
    function cypher_simulate($query) {
        global $graphe, $security_message;

        $blacklist_patterns = ["DROP", "DELETE", "UNION", "INSERT", "UPDATE", "<script>", "--"];
        foreach ($blacklist_patterns as $pattern) {
            if (stripos($query, $pattern) !== false) {
                log_security_incident("Requête dangereuse", "Tentative détectée : " . $query);
                return "<p style='color:red; font-weight:bold;'>⚠️ Menace détectée : Requête interdite et enregistrée !</p>";
            }
        }

        preg_match("/MATCH \((\w+)\)-

\[:(\w+)\]

->\((\w+)\)/", $query, $matches);
        if ($matches) {
            $noeud_depart = $matches[1];
            $relation = strtolower($matches[2]);
            $noeud_arrive = $matches[3];

            foreach ($graphe as $nom => $details) {
                if ($nom === $noeud_depart && $details["relation"] === $relation) {
                    return "<p style='color:green; font-weight:bold;'>✅ Résultat trouvé : " . $nom . " -[:" . strtoupper($relation) . "]-> " . $details["cible"] . "</p>";
                }
            }
        }
        return "<p style='color:red; font-weight:bold;'>❌ Aucun résultat trouvé.</p>";
    }
}
?>
