<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur de CV</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            width: 50%;
            margin: auto;
        }
        .cv {
            display: none;
            border: 1px solid #000;
            padding: 10px;
            margin-top: 20px;
        }
        .cv h2 {
            text-align: center;
        }
        .cv-section {
            margin-bottom: 15px;
        }
        .cv-section h3 {
            border-bottom: 1px solid #000;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Formulaire de CV</h1>
        <form id="cvForm">
            <label for="name">Nom:</label><br>
            <input type="text" id="name" required><br><br>

            <label for="age">Âge:</label><br>
            <input type="number" id="age" required><br><br>

            <label for="address">Adresse:</label><br>
            <input type="text" id="address" required><br><br>

            <label for="phone">Téléphone:</label><br>
            <input type="text" id="phone" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" required><br><br>

            <label for="position">Poste:</label><br>
            <input type="text" id="position" required><br><br>

            <label for="education">Formations:</label><br>
            <textarea id="education" required></textarea><br><br>

            <label for="experience">Expériences professionnelles:</label><br>
            <textarea id="experience" required></textarea><br><br>

            <label for="interests">Centres d'intérêt:</label><br>
            <textarea id="interests" required></textarea><br><br>

            <button type="submit">Valider</button>
        </form>

        <div class="cv" id="cv">
            <h2>CV Généré</h2>
            <div class="cv-section">
                <h3>Informations personnelles</h3>
                <p id="cvName"></p>
                <p id="cvAge"></p>
                <p id="cvAddress"></p>
                <p id="cvPhone"></p>
                <p id="cvEmail"></p>
            </div>
            <div class="cv-section">
                <h3>Poste</h3>
                <p id="cvPosition"></p>
            </div>
            <div class="cv-section">
                <h3>Formations</h3>
                <p id="cvEducation"></p>
            </div>
            <div class="cv-section">
                <h3>Expériences professionnelles</h3>
                <p id="cvExperience"></p>
            </div>
            <div class="cv-section">
                <h3>Centres d'intérêt</h3>
                <p id="cvInterests"></p>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('cvForm').addEventListener('submit', function(event) {
            event.preventDefault();
            document.getElementById('cvName').textContent = 'Nom: ' + document.getElementById('name').value;
            document.getElementById('cvAge').textContent = 'Âge: ' + document.getElementById('age').value;
            document.getElementById('cvAddress').textContent = 'Adresse: ' + document.getElementById('address').value;
            document.getElementById('cvPhone').textContent = 'Téléphone: ' + document.getElementById('phone').value;
            document.getElementById('cvEmail').textContent = 'Email: ' + document.getElementById('email').value;
            document.getElementById('cvPosition').textContent = 'Poste: ' + document.getElementById('position').value;
            document.getElementById('cvEducation').textContent = document.getElementById('education').value;
            document.getElementById('cvExperience').textContent = document.getElementById('experience').value;
            document.getElementById('cvInterests').textContent = document.getElementById('interests').value;

            document.getElementById('cv').style.display = 'block';
        });
    </script>

</body>
</html>
