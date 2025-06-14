<?php
include 'security.php';?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="icon" href="./ico.png">
        
    <title>D-web</title>
    <style>
        /* Palette de couleurs */
        :root {
            --primary-color: #642EFE;  /* Couleur principale du flyer */
            --secondary-color: #642EFE; /* Couleur secondaire */
            --background-color: #F4F4F4;
            --text-color: #642EFE;
        }

        /* Styles globaux */
   body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
           background-color:white;
    background-image: url('./co2.png');
    background-size: cover;
    background-position: center;
    text-align: center;
}


            

/* Barre de navigation */
nav {
    position: fixed; z-index:8001;
    top: 0;
    left: 0;
    width: 100%; height:7%;
    background-color: rgba(0, 0, 0, 0.3); /* Transparence */
    color: white;
    padding: 10px 20px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5); /* Ombre */
    display: flex;
    justify-content: space-around;
}

/* Boutons */
nav button {
    background-color: transparent; width:15%; z-index:8001;
    border: 2px solid white;
    color: white;
    padding: 2px 15px;
    cursor: pointer;
    transition: 0.3s;
}

nav button:hover {
    background-color: rgba(255, 255, 255, 0.2);
}

/* Contenu */
.content {
    margin-top: 80px;
}

/* 📱 Responsive Design: Mobile */
@media (max-width: 768px) {
        
           body {

    background-image: url('./color.PNG');

}
        
    nav {
        display: flex;
        flex-wrap: nowrap; /* Empêche le passage à la ligne */
        overflow-x: auto; /* Active le défilement horizontal si nécessaire */
        white-space: nowrap; /* Empêche la rupture de ligne des éléments */
        padding: 10px;
    }

    nav button {
        flex: 0 0 auto; /* Permet aux boutons de conserver leur taille */
        width: auto; /* Ajustable selon le design */
        margin: 5px; height:25px;
    }

    .content {
        padding: 2px;
    }
}

            
            
            
            
            
.logo-container { 
    display: flex; 
    justify-content: center; 
    align-items: center; 
     padding: 20px;
} 

.logo { 
    width: 100px;  background-color:#642EFE; 
    height: 100px; 
    border-radius: 50%; 
    overflow: hidden; 
    border: 3px solid var(--primary-color); 
    animation: fadeRotateLogo 7s ease-in-out infinite; /* Ajout de l'animation avec effet fade */
} 

.logo img { 
    width: 110%; 
    height: 110%; 
 
    object-fit: cover; 
}

@keyframes fadeRotateLogo { 
    0% { opacity: 1; transform: rotate(0deg); }  
    45% { opacity: 0.1; } /* Disparition progressive */
    55% { opacity: 0.3; } /* Transition invisible */
    100% { opacity: 1; transform: rotate(0deg); } /* Réapparition avec rotation */
}

      /* ✅ Image arrière-plan qui tourne */
        .image-rotation {
            position: absolute;
            width: 100%;
            height: 100%;
            background: url('./ico.png') center/cover no-repeat;
            border-radius: 50%;
            animation: rotate 5s linear infinite;
        }

        /* ✅ Image au premier plan */
        .image-avant {
            position: absolute;
            width: 60%;
            height: 35%;
            background: url('./ico2.png') center/cover no-repeat;
            border-radius: 50%;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
        }

        /* ✅ Animation de rotation */
        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(-360deg);
            }
        }         
            
            

            
            
                    .whatsapp-logo {
            width: 20px;
            vertical-align: middle;
            margin-left: 5px;
        }
            
            
            
            
            
            
            
            
        .container {
            display: flex;
            flex-direction: row;
            width: 50%; 
            max-width: 1000px;
            margin: auto; margin-top:-3.2%;
            background-color: rgba(0, 0, 0, 0.1);
            padding: 7px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .left-section, .right-section {
            flex: 1;
            padding: 10px;
            color: var(--text-color);
        }

        .separator {
            width: 2px;
            background-color: var(--primary-color);
        }

        h2 {
            color: var(--primary-color);
            border-bottom: 2px solid var(--secondary-color);
            padding-bottom: 5px;
        }

        table {
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 10px;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center; 
        }

        table th {
              
            background-color: rgba(0, 0, 0, 0.1);
            color: var(--text-color);
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                width: 90%;
                padding: 10px;
            }

            .separator {
                width: 100%;
                height: 2px;
                background-color: var(--primary-color);
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>

    <!-- Image ronde centrée pour le logo -->
    <div class="logo-container">
        <div class="logo">
           
             
                
                    <div class="image-rotation"> </div> <!-- ✅ Image arrière-plan qui tourne -->
  
                <div class="image-avant"> </div> <!-- ✅ Image au premier plan -->
                
                
        </div>
    </div>
        
          
        
    <style>
        .image-fixe {
            position: fixed;
            top: 12%;
            right: 5px;
            width: 350px;
            height: auto; border-radius:8px;
        }
        
    
            
        /* Ajustement pour les mobiles */
        @media (max-width: 768px) {
            .image-fixe {
                width: 100px; /* Taille réduite */
                    top: 12%;
            }
        }
    </style>

        
        
        
        

    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        form { width: 50%; margin: auto; padding: 20px; border: 1px solid #ddd; background-color: #f9f9f9; border-radius: 5px; z-index:8000; }
       
        .modal {
    display: none;  z-index:8000;
    position: fixed;
    top: 50%; /* ✅ Centre verticalement */
    margin-left: 47.5%; /* ✅ Centre horizontalement */
    width:95%;            
    transform: translate(-50%, -50%); /* ✅ Ajuste pour être parfaitement centré */
    height: auto; /* ✅ Ajuste automatiquement la hauteur */
    background: rgba(0,0,0,0.5);
    padding: 5px;
    border-radius: 10px; /* ✅ Coins arrondis pour un meilleur design */
    box-shadow: 0px 4px 8px rgba(0,0,0,0.3); /* ✅ Effet d'ombre pour un meilleur rendu */
}

        .modal-content { background: white; padding: 20px; margin: 10% auto; width: 100%; border-radius: 5px; text-align: left; }
        iframe { width: 100%; height: 500px; border: none; } /* ✅ Permet l'affichage complet */
            
             /* Ajustement pour les mobiles */
        @media (max-width: 768px) {
            
                    .modal {
    width: 95%; overflow: scroll; 

}
                }
            
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#toggleModalBtn").click(function(){
                let modal = $("#commandeModal");
                if (modal.is(":visible")) {
                    modal.hide(); // ✅ Ferme la modal
                } else {
                    modal.show(); // ✅ Affiche la modal
                    $("#modalBody").html('<iframe src="./svscmd.php"></iframe>'); // ✅ Charge `svscmd.php` comme une page complète
                }
            });
        });
    </script>



<!-- ✅ Fenêtre modale pour afficher `svscmd.php` -->
<div id="commandeModal" class="modal">
    <div class="modal-content">
        <h3>Nos services et tarifs</h3>
        <div id="modalBody"></div> <!-- ✅ Formulaire `svscmd.php` chargé entièrement -->
    </div>
</div>


        
        
        
        
        
        
        
        
        
        
        
 <nav>
        <button>Aceuil</button>
         
        
         
         <button onclick="toggleForm()" id="toggleForm" >Crées un Fyer</button>  
        <!-- ✅ Bouton unique pour afficher et masquer la modal -->
       
         <!-- ✅ Bouton pour ouvrir la popup -->
<button onclick="ouvrirPopup()">🚀 Active ton Flyer</button>
<!-- ✅ Bouton pour ouvrir le popup -->
<button onclick="ouvrirPopup2()">🔍 Mise a jour </button>
         
         
         <button id="toggleModalBtn">Nos services</button>
    </nav>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $("#form-container").hide(); // Masque le formulaire au début

        $("nav button:nth-child(2)").click(function(){
            $("#form-container").slideToggle(500); // Animation slide down / up
        });
    });
</script>

       
        
        
        
        
        
        
        
        
  



<!-- ✅ Structure du popup (Réutilisation du style) -->
<div id="popupOverlay2" class="popupOverlay">
    <div class="popupContent">
        <span class="popupClose" onclick="fermerPopup2()">&times;</span>
        <!-- ✅ Chargement de `activator.php` dans un iframe -->
        <iframe id="popupIframe2" class="popupIframe" src="./D-web/activator-turque.php"></iframe>
    </div>
</div>

<!-- ✅ Style réutilisé -->
<style>
.popupOverlay {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.5);
}

.popupContent {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    width: 80%;
    max-width: 900px;
    height: 600px;
    margin: auto;
    margin-top: 5%;
    position: relative;
}

.popupClose {
    position: absolute;
    right: 15px;
    top: 10px;
    font-size: 25px;
    cursor: pointer;
}

.popupIframe {
    width: 100%;
    height: 550px;
    border: none;
}
</style>

<!-- ✅ Script pour gérer l’ouverture/fermeture -->
<script>
function ouvrirPopup2() {
    document.getElementById("popupOverlay2").style.display = "block";
}

function fermerPopup2() {
    document.getElementById("popupOverlay2").style.display = "none";
}
</script>


      
        
       <!-- ✅ Structure de la popup -->
    <div id="popupOverlay" class="popupOverlay">
        <div class="popupContent">
            <span class="popupClose" onclick="fermerPopup()">&times;</span>
            <!-- ✅ Chargement du contenu `builder.php` dans un iframe -->
            <iframe id="popupIframe" class="popupIframe" src="/D-web/builder.php"></iframe>

        </div>
    </div>

    <!-- ✅ JavaScript pour gérer l'ouverture et la fermeture -->
    <script>
        function ouvrirPopup() {
            document.getElementById("popupOverlay").style.display = "block";
            document.getElementById("popupIframe").src = "./D-web/builder.php"; // ✅ Assure un bon chargement du fichier
        }

        function fermerPopup() {
            document.getElementById("popupOverlay").style.display = "none";
            document.getElementById("popupIframe").src = ""; // ✅ Vide l'iframe après fermeture pour éviter les chargements inutiles
        }
    </script>     
        
        
        
        
        
       
    <style>
        /* ✅ Style de la popup */
        .popupOverlay {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
        }

        .popupContent {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            width: 80%;
            max-width: 900px;
            height: 600px;
            margin: auto;
            margin-top: 5%;
            position: relative;
        }

        .popupClose {
            position: absolute;
            right: 15px;
            top: 10px;
            font-size: 25px;
            cursor: pointer;
        }

        .popupIframe {
            width: 100%;
            height: 550px;
            border: none;
        }
    </style>




      
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
                <div id="container3">
    <img src="./Mglogo.png" class="slide-text" style="border-radius:50%; width:58%;">
                <div class="slide-text">🌍 Concevez votre plate-forme chez nous !</div>
    <div class="slide-text">📦 Livraison rapide et efficace !</div>
    <div class="slide-text">€ Profitez des meilleurs prix !</div>
    <div class="slide-text"><a href="http://lesterterrois-241.atwebpages.com/"> Allez sur Tarmak-241!</a></div>
   <div class="slide-text" >Suivez votre commande <br>et recevez un devis !</div>
    <div class="slide-text" >D-web<br>Vos besoins, nos services !</div>
                        <img src="./D-webss.png" class="slide-text" style="border-radius:5%; width:58%;" >
</div>
<br>
        
        

<img src="./ico2.png" alt="D-web" class="image-fixe">        
        
        
        

    <div class="container">           
        <!-- Section de gauche -->
        <div class="left-section">
            <h2>Mode d'emploi</h2>
            <ul>
                <li>1. Inscrivez-vous </li>
                <li>2. Faites une demande</li>
                <li>3. Paiement</li>
                <li>4. Recevez vos codes</li>
                <li>5. Obtenez votre produit</li>
            </ul>
   
                
        </div> <br><br><br><br><br><br><br><br><br>

        <!-- Trait de séparation -->
        <div class="separator"></div>

        <!-- Section de droite -->
        <div class="right-section">
            <h2>Nos tarifs</h2>


            <h2>Contacts & Services</h2>
            <p><strong>Numéro :</strong> 
       <a href="https://wa.me/24177505096" target="_blank">
               <button style="background-color:green; border-radius:8px;">  
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Logo" width="20" height="20">  
            +24177146442
        </button></a>  </p>

        </div>
    </div>

       

<!DOCTYPE html>  
<html lang="fr">  
<head>  
  <meta charset="UTF-8">  
  <title>Reproduction</title>  
  <style>  
    .telecharger {  
      color: #642EFE;  
      font-family: Arial, Helvetica, sans-serif;  
      font-size: 60px;  
      font-weight: bold;  
      white-space: nowrap;  
    }  
  </style>  
</head>  
<body>  
  <div class="telecharger">D-W≡/&gt;</div>  
</body>  
</html>  
        
        
        
        
        
        
        
        
        
        
        
        
        
        
<style>
    /* Bouton sur PC */
    #toggleForm {
        position: relative;
        color: white;
        cursor: pointer;
        text-align: center;
        z-index: 9010;
        border-radius: 5px;
       transition: background-color 1.3s ease;          
    }

 #toggleForm:hover {
    background-color: rgba(100, 46, 254, 0.3); /* Transparence à 30% */
}

    /* Formulaire sur PC */
    #sidebar {
        position: fixed;
        left: -4%;
        top: calc(-1% + 55px);
        width: 22%;
        background-color: none;  
        transition: transform 1.3s ease-in-out, opacity 0.7s ease-in-out;
        transform: translateX(-100%);
        overflow: hidden;
        opacity: 0;
        border-radius: 5px; margin-top:-7%;
    }

    #sidebar.show {
        transform: translateX(0);
        opacity: 1;
    }

    /* 🔹 Responsive pour mobile */
    @media screen and (max-width: 768px) {
        #toggleForm {
             flex: 0 0 auto; /* Permet aux boutons de conserver leur taille */
        width: auto; /* Ajustable selon le design */
        margin: 5px; height:25px;
            
    }
        }

        #sidebar {
            left: 5%;
            top: 25%;
            width: 95%;
            transform: translateX(-100%); background-color:white; opacity:0.8;
        }

        #sidebar.show {
            transform: translateX(0); /* Slide vers la droite */
        }
    }

    form {
        margin-top: 10px;
    }

    input {
        display: block;
        width: 90%;
        margin: 5px auto;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    /* Séparation de MP et Date */
    .form-group {
        display: block;
        width: 100%;
        margin: auto;
    }

    button {
        display: block;
        width: 90%;
        margin: 10px auto;
        padding: 10px;
        background-color: white;
        color: #008CBA;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #005f79;
        color: white;
    }
</style>




<div id="sidebar">
                <div id="form-container">
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
       
                          <input type="text" name="nom-prenom" placeholder="Nom & Prénom" required>
    <input type="text" name="tel" placeholder="Téléphone" required>
            
            
      

        <!-- Champ pour télécharger une image -->
        <div class="form-group">
            <label for="image">Inser logo :</label>
            <input type="file" name="image" id="image" accept="image/*" required>

        </div>
            
  
    <input type="text" name="dwebid" placeholder="DWeb ID (Unique)" required>
    <textarea name="cdc" placeholder="Code de conception du site"></textarea>
    <input type="text" name="namesite" placeholder="Nom du site" required>
    <textarea name="descriptsite" placeholder="Description du site"></textarea>
    <input type="hidden" name="nameimg" placeholder="Nom de l'image">
    <input type="text" name="colone1" placeholder="Votre facebook">
    <input type="text" name="colone2" placeholder="Votre tic toc">
    <input type="text" name="colone3" placeholder="Votre whatspp">
    <input type="text" name="colone4" placeholder="Votre I-web">
    <textarea name="basdepage" placeholder="Bas de page"></textarea>
    
     
            
        <!-- Champ de date caché -->
        <input type="hidden" name="date" id="date">

        <button type="submit">Envoyer</button>
    </form>
</div></div>

<script>
    document.getElementById("date").value = new Date().toISOString().replace("T", "_").split(".")[0];

    document.getElementById('toggleForm').addEventListener('click', function() {
        document.getElementById('sidebar').classList.toggle('show');
    });
</script>

<?php
include 'bdcndw.php'; // ✅ Connexion à la base de données

$message = ""; // ✅ Message de confirmation

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // ✅ Sécurisation des entrées utilisateur
        $nom_prenom   = isset($_POST["nom-prenom"]) ? $mysqli->real_escape_string($_POST["nom-prenom"]) : "";
        $tel          = isset($_POST["tel"]) ? $mysqli->real_escape_string($_POST["tel"]) : "";
        $dwebid       = isset($_POST["dwebid"]) ? $mysqli->real_escape_string($_POST["dwebid"]) : "";
        $cdc          = isset($_POST["cdc"]) ? $mysqli->real_escape_string($_POST["cdc"]) : "";
        $namesite     = isset($_POST["namesite"]) ? $mysqli->real_escape_string($_POST["namesite"]) : "";
        $descriptsite = isset($_POST["descriptsite"]) ? $mysqli->real_escape_string($_POST["descriptsite"]) : "";
        $colone1      = isset($_POST["colone1"]) ? $mysqli->real_escape_string($_POST["colone1"]) : "";
        $colone2      = isset($_POST["colone2"]) ? $mysqli->real_escape_string($_POST["colone2"]) : "";
        $colone3      = isset($_POST["colone3"]) ? $mysqli->real_escape_string($_POST["colone3"]) : "";
        $colone4      = isset($_POST["colone4"]) ? $mysqli->real_escape_string($_POST["colone4"]) : "";
        $basdepage    = isset($_POST["basdepage"]) ? $mysqli->real_escape_string($_POST["basdepage"]) : "";
        $date         = date("Y-m-d H:i:s"); // ✅ Ajout automatique de la date

        // ✅ Vérifier si le `dwebid` existe déjà
        $check_query = "SELECT dwebid FROM `userd-web` WHERE `dwebid` = '$dwebid'";
        $result = $mysqli->query($check_query);

        if ($result->num_rows > 0) {  
            echo "<script>
                alert('⚠️ Ce DWeb ID existe déjà ! Redirection vers l'accueil.');
                window.location.href = './index.php';
            </script>";
            exit;
        }

        // ✅ Vérification de l'image
        if (!isset($_FILES["image"]["tmp_name"]) || empty($_FILES["image"]["tmp_name"])) {
            throw new Exception("❌ Erreur : Aucun fichier image détecté.");
        }

        // ✅ Création d'un dossier unique basé sur `dwebid`
        $dossier = "./imsite/$dwebid";
        if (!file_exists($dossier)) {
            mkdir($dossier, 0777, true);
        }

        // ✅ Nom de l'image optimisé
        $imgname = strtolower(str_replace(" ", "-", $nom_prenom)) . "-" . $tel . "-" . strtolower(str_replace(" ", "-", $namesite)) . ".webp";
        $cheminTemp = $_FILES["image"]["tmp_name"];
        $destinationFinale = "$dossier/$imgname";

        // ✅ Stockage de l’image
        move_uploaded_file($cheminTemp, $destinationFinale);

        // ✅ Requête préparée pour insérer les données
        $stmt = $mysqli->prepare("INSERT INTO `userd-web` (`nom-prenom`, `tel`, `dwebid`, `cdc`, `namesite`, `descriptsite`, `nameimg`, `colone1`, `colone2`, `colone3`, `colone4`, `basdepage`, `date`) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("sssssssssssss", $nom_prenom, $tel, $dwebid, $cdc, $namesite, $descriptsite, $destinationFinale, $colone1, $colone2, $colone3, $colone4, $basdepage, $date);
        
        if (!$stmt->execute()) {
            $message = "<div class='success'><p style='color: red;'>❌ Erreur SQL : " . $stmt->error . "</p></div>";
        } else {
            $message = "<div class='success'>";
            $message .= "<h2 style='color: green;'>✅ Données enregistrées avec succès !</h2>";
            $message .= "<p><strong>Nom & Prénom :</strong> " . htmlspecialchars($nom_prenom) . "</p>";
            $message .= "<p><strong>Téléphone :</strong> " . htmlspecialchars($tel) . "</p>";
            $message .= "<p><strong>DWeb ID :</strong> " . htmlspecialchars($dwebid) . "</p>";
            $message .= "<p><strong>Nom du site :</strong> " . htmlspecialchars($namesite) . "</p>";
            $message .= "<p><strong>Description :</strong> " . htmlspecialchars($descriptsite) . "</p>";
            $message .= "<p><strong>Facebook :</strong> " . htmlspecialchars($colone1) . "</p>";
            $message .= "<p><strong>TikTok :</strong> " . htmlspecialchars($colone2) . "</p>";
            $message .= "<p><strong>WhatsApp :</strong> " . htmlspecialchars($colone3) . "</p>";
            $message .= "<p><strong>I-Web :</strong> " . htmlspecialchars($colone4) . "</p>";
            $message .= "<p><strong>Bas de page :</strong> " . htmlspecialchars($basdepage) . "</p>";
            $message .= "<p><strong>Date d'enregistrement :</strong> " . htmlspecialchars($date) . "</p>";
            if (!empty($destinationFinale)) {
                $message .= "<p><strong>Image associée :</strong></p>";
                $message .= "<img src='" . htmlspecialchars($destinationFinale) . "' alt='Image du flyer' width='200px'>";
            }
            $message .= '<button onclick="captureCommande()">📸 Capturer</button>';
            $message .= '<button onclick="annulerCommande()">❌ Annuler</button>';
            $message .= "</div>";
        }

        $stmt->close();
    }

} catch (Exception $e) {
    $message = "<div class='success'><p style='color: red;'>❌ Erreur : " . $e->getMessage() . "</p></div>";
}

$mysqli->close();
?>

<!-- ✅ Affichage des résultats -->
<div id="capture_zone">
    <?php echo $message; ?>
</div>

<!-- ✅ Script de capture -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
function captureCommande() {
    html2canvas(document.getElementById("capture_zone")).then(canvas => {
        let link = document.createElement("a");
        link.href = canvas.toDataURL("image/png");
        link.download = "confirmation.png";
        link.click();
        
        setTimeout(() => {
            if (confirm("✅ Téléchargement terminé ! Voulez-vous aller à l'accueil ?")) {
                window.location.href = "./index.php";
            }
        }, 1000);
    });
}

function annulerCommande() {
    if (confirm("❌ Voulez-vous vraiment annuler cette commande ?")) {
        window.location.href = "annuler.php?dwebid=<?php echo $dwebid; ?>";
    }
}
</script>



        
        
        <style>
.success { 
    background-color: #d4edda; /* ✅ Vert clair agréable */
    padding: 20px; 
    border-radius: 5px; 
    text-align: center; 
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    width: 50%;
    max-width: 500px;
    margin: auto;
    position: relative; /* ✅ Plus de problème d'affichage */
}

.success p {
    color: black; /* ✅ Texte bien lisible */
    font-size: 16px;
    line-height: 1.5;
}

button {
    margin-top: 15px;
    padding: 10px;
    background-color: #28a745; /* ✅ Bouton vert vif */
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;
}

button:hover {
    background-color: #218838;
}

/* ✅ Adaptation sur mobile */
@media (max-width: 768px) {
    .success {
        width: 90%;
        font-size: 16px;
        margin-top: 25%;    
    }
}
</style>

        
        
        
        
        
        
  <style>
#container3 {  
    position: fixed;  
    top: 18%;  
    left: 1%;  
    width: 21.5%;  
    min-height: 90px; /* Hauteur minimale pour assurer une bonne visibilité */
    background-color: #642EFE;
    padding: 10px;  
    overflow: hidden;  
    border-radius: 8px;  
    display: flex;  
    flex-direction: column;  
    justify-content: center;  
    align-items: center;  
    color: white;  
}  

.slide-text {  
    opacity: 0;  
    position: absolute;  
    font-size: 15px; /* Fixe une taille de texte pour la lisibilité */
    font-weight: bold;  
    white-space: nowrap;  
    transition: transform 2s ease-in-out, opacity 2s ease-in-out;  
}  

@keyframes slideLeft {
    0% { transform: translateX(100%); opacity: 0; }
    20% { transform: translateX(50%); opacity: 0.5; }
    40% { transform: translateX(20%); opacity: 1; }
    60% { transform: translateX(0); opacity: 1; }
    80% { transform: translateX(-20%); opacity: 0.5; }
    100% { transform: translateX(-100%); opacity: 0; }
}

/* ✅ Ajustements pour mobile */
@media screen and (max-width: 768px) {
    #container3 {
        width: 90%; /* ✅ Plus adapté aux écrans mobiles */
        height: 10%; /* ✅ Augmentation de la hauteur minimale */
        position: relative; /* ✅ Ajustement pour éviter des conflits sur mobile */
        font-size: 16px; /* ✅ Meilleure lisibilité */
    }

    .slide-text {
        font-size: 11px; /* ✅ Uniformisation sur mobile */
    }
}


        </style>      


        
   <script>
    document.addEventListener("DOMContentLoaded", function () {
        let texts = document.querySelectorAll(".slide-text");
        let index = 0;

        function showText() {
            texts.forEach((text) => {
                text.style.opacity = "0";
                text.style.transform = "translateX(-100%)"; // Départ à droite
            });

            texts[index].style.opacity = "1";
            texts[index].style.transform = "translateX(0)"; // Arrive au centre

            setTimeout(() => {
                texts[index].style.opacity = "0";
                texts[index].style.transform = "translateX(100%)"; // Glisse vers la gauche

                index = (index + 1) % texts.length; // Passe à la phrase suivante
                setTimeout(showText, 1000); // Attente avant la phrase suivante
            }, 5000); // Pause de 6 secondes
        }

        showText();
    });
</script>
     
     
        
        
        

        
      
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

    <style>
#security-block {
    position: fixed;
    bottom: -3%;
    right: 0; /* ✅ Ajustement pour placer à droite */
    width: auto; /* ✅ Garde une largeur adaptée au texte */
     height: 6%;
    background-color: none;
    color: white;
    text-align: center; font-size:0.6em;           
    padding: 10px;
    font-weight: bold;
    border-radius: 5px; /* ✅ Ajout d'arrondis pour un meilleur rendu */
}

    </style>

        
        
        
        
 <style>       
        
#bottom-bar {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 8%;
    background-color: rgba(0, 0, 0, 0.5); /* ✅ Transparence à 40% */
    color: white;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 18px;
}

/* 🔹 ✅ Responsive pour mobile */
@media screen and (max-width: 768px) {
    #bottom-bar {
        height: 12%; /* ✅ Ajustement sur mobile */
        font-size: 16px;
    }
}

</style>        
        
     <div id="bottom-bar">
       <div> <a href="https://wa.me/+24166367935" target="_blank">
         <button  style="background-color: white; 
       color: #642EFE; border: none; bottom:-8px; width:52%; height:auto;
   padding: 2px 2px 2px; 2px border-radius: 12px; font-size: 1rem; 
                cursor: pointer; transition: background 0.3s ease;">
                 |D-web <img src="./ico.png" style="width:3%; margin-top:1px;"> <?php echo date("Y"); ?>|</button></a>
   
  
        
    
  <div id="security-block">
        <?php include 'security.php'; echo $security_message; ?>
    </div>
  
        
    </div> 
</div>
 
        
        
        
        
        
        
        
</body>
</html>
