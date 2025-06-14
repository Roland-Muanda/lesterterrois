<?php
include 'sbcn.php'; // Connexion à la base de données

$data = json_decode(file_get_contents("php://input"), true);

if (!empty($data["type"]) && !empty($data["details"])) {
    log_security_incident($data["type"], $data["details"]);
}
?>
