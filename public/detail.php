<!DOCTYPE html>
<html>
<head>
    <title>Details van Muziek Single</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        /* Voeg hier je aangepaste CSS-stijlen toe */
        .detail-page {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 130vh; /* Hiermee wordt de container de volledige hoogte van het scherm */
        }

        .detail-page img {
            border-radius: 1rem;
            width: 35%;
            height: 40%;
        }

        .detail-page h2,
        .detail-page p {
            color: white; /* Stel de tekstkleur in op wit */
            font-weight: bold; /* Maak de tekst vetgedrukt */
        }
        .image-list {
            padding: 1rem;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px; /* Ruimte tussen de afbeeldingen */
        }

        .image-list img {
            max-width: 20rem; /* Pas de maximale breedte van de afbeeldingen aan zoals gewenst */
            height: auto;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <h1 class="navbar-title">Muziek Singles</h1>
    </nav>

    <div class="content">
        <div class="detail-page">
        <?php
// Inclusief het juiste relatieve pad naar data.php
include 'data.php';

if (isset($_GET['id'])) {
    $musicItem = $musicSingles[$_GET['id']];
    echo '<img src="' . $musicItem["image"] . '" alt="' . $musicItem["title"] . '">';
    echo '<h2>' . $musicItem["title"] . '</h2>';
    echo '<p>Artiest: ' . $musicItem["artist"] . '</p>';
    echo '<p>Leeftijd: ' . $musicItem["leeftijd"] . '</p>';
    echo '<p>Genre: ' . $musicItem["genre"] . '</p>';
    echo '<p>Duur: ' . $musicItem["duur"] . '</p>';
    echo '<p>Release datum: ' . $musicItem["datum"] . '</p>';
    // Hier kun je code toevoegen om andere informatie weer te geven
} else {
    echo '<p>Geen informatie beschikbaar.</p>';
}
?>
    <div class="image-list">
        <img src="<?= $musicItem["image1"] ?>" alt="Afbeelding 1">
        <img src="<?= $musicItem["image2"] ?>" alt="Afbeelding 2">
    </div>
        </div>
    </div>
</body>
</html>
