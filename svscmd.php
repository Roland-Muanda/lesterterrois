<?php
include '../bdcndw.php'; // Connexion à la base de données

$message = ""; 

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // ✅ Récupérer et sécuriser les données
        $nom_prenom   = $mysqli->real_escape_string($_POST["nom-prenom"]);
        $tel          = $mysqli->real_escape_string($_POST["tel"]);
        $dwebid       = $mysqli->real_escape_string($_POST["dwebid"]);
        $cdc          = $mysqli->real_escape_string($_POST["cdc"]);
        $namesite     = $mysqli->real_escape_string($_POST["namesite"]);
        $descriptsite = $mysqli->real_escape_string($_POST["descriptsite"]);
        $colone1      = $mysqli->real_escape_string($_POST["colone1"]);
        $colone2      = $mysqli->real_escape_string($_POST["colone2"]);
        $colone3      = $mysqli->real_escape_string($_POST["colone3"]);
        $colone4      = $mysqli->real_escape_string($_POST["colone4"]);
        $basdepage    = $mysqli->real_escape_string($_POST["basdepage"]);

        // ✅ Vérifier si une image est envoyée
        if (!isset($_FILES["image"]["tmp_name"]) || empty($_FILES["image"]["tmp_name"])) {
            throw new Exception("❌ Erreur : Aucun fichier image détecté.");
        }

        // ✅ Création d'un dossier unique basé sur `dwebid`
        $dossier = "./imsite/$dwebid";
        if (!file_exists($dossier)) {
            mkdir($dossier, 0777, true);
        }

        // ✅ Nom de l’image optimisé
        $imgname = strtolower(str_replace(" ", "-", $nom_prenom)) . "-" . $tel . "-" . strtolower(str_replace(" ", "-", $namesite)) . ".webp";
        $cheminTemp = $_FILES["image"]["tmp_name"];
        $destinationFinale = "$dossier/$imgname";

        // ✅ Compression de l’image
        $image = imagecreatefromstring(file_get_contents($cheminTemp));
        if (!$image) {
            throw new Exception("❌ Erreur lors de la compression de l'image.");
        }
        imagewebp($image, $destinationFinale, 80); // Compression à 80% de qualité
        imagedestroy($image); // Libérer la mémoire

        // ✅ Insérer les données dans `userd-web`
        $stmt = $mysqli->prepare("INSERT INTO `userd-web` (`nom-prenom`, `tel`, `dwebid`, `cdc`, `namesite`, `descriptsite`, `nameimg`, `colone1`, `colone2`, `colone3`, `colone4`, `basdepage`) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("ssssssssssss", $nom_prenom, $tel, $dwebid, $cdc, $namesite, $descriptsite, $destinationFinale, $colone1, $colone2, $colone3, $colone4, $basdepage);
        
        if (!$stmt->execute()) {
            throw new Exception("❌ Erreur lors de l'insertion : " . $stmt->error);
        }

        $message = "<p style='color: green;'>✅ Données enregistrées avec succès !</p>";

        $stmt->close();
    }
} catch (Exception $e) {
    $message = "<p style='color: red;'>❌ Erreur : " . $e->getMessage() . "</p>";
}

?>

<!-- ✅ Formulaire d’insertion -->
<form method="POST" enctype="multipart/form-data">
    <label>👤 Nom & Prénom :</label>
    <input type="text" name="nom-prenom" required>

    <label>📞 Téléphone :</label>
    <input type="text" name="tel" required>

    <label>🔍 DWeb ID :</label>
    <input type="text" name="dwebid" required>

    <label>📝 Code de création :</label>
    <input type="text" name="cdc" required>

    <label>🌐 Nom du site :</label>
    <input type="text" name="namesite" required>

    <label>📖 Description :</label>
    <input type="text" name="descriptsite" required>

    <label>📷 Image du flyer :</label>
    <input type="file" name="image" accept="image/*" required>

    <button type="submit">🚀 Insérer dans `userd-web`</button>
</form>

<!-- ✅ Affichage du message -->
<div id="result_zone">
    <?php echo $message; ?>
</div>
