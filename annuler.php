<?php
include 'bdcndw.php'; // Connexion à la base de données

// ✅ Vérification de l'ID reçu
if (!isset($_GET['dwebid']) || empty($_GET['dwebid'])) {
    echo "<script>alert('❌ Erreur : DWeb ID invalide !'); window.location.href = './index.php';</script>";
    exit;
}

$dwebid = $mysqli->real_escape_string($_GET['dwebid']);

// ✅ Vérifier que l'ID existe dans la base avant suppression
$sql_check = "SELECT * FROM `userd-web` WHERE dwebid = '$dwebid'";
$result = $mysqli->query($sql_check);

if ($result->num_rows == 0) {
    echo "<script>alert('⚠️ Erreur : Aucune donnée trouvée pour cet ID !'); window.location.href = './index.php';</script>";
    exit;
}

// ✅ Suppression des données dans la base
$sql_delete = "DELETE FROM `userd-web` WHERE dwebid = '$dwebid'";
if ($mysqli->query($sql_delete)) {

    // ✅ Suppression du dossier et des fichiers
    $dossier = "./imsite/$dwebid";
    if (file_exists($dossier)) {
        array_map('unlink', glob("$dossier/*.*"));
        rmdir($dossier);
    }

    // ✅ Confirmation et redirection
    echo "<script>alert('❌ Commande annulée et supprimée avec succès.'); window.location.href = 'http://lesterterrois.myartsonline.com/';</script>";

} else {
    echo "<script>alert('⚠️ Erreur lors de la suppression des données !'); window.location.href = 'https://lesterterrois.myartsonline.com/';</script>";
}

$mysqli->close();
?>
