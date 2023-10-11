<!DOCTYPE html>
<html>
<head>
    <title>Muziek Singles</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <nav class="navbar">
        <h1 class="navbar-title">Muziek Singles</h1>
    </nav>

    <div class="content">
        <!-- Zoekformulier -->
        <form id="search-form">
            <label for="genre"></label>
            <select id="genre">
                <option value="">Alle genres</option>
                <option value="Trap">Trap</option>
                <option value="Rap">Rap</option>
                <option value="Pop">Pop</option>
                <!-- Voeg hier meer genres toe -->
            </select>
            <input type="text" id="search-input" placeholder="Zoeken op titel of artiest">
            <button type="submit">Zoeken</button>
        </form>


        <!-- Resultaten worden hier weergegeven -->
        <div id="results">
            <?php
            // Inclusief het singles.php-document om gegevens op te halen
            include 'data.php';

            foreach ($musicSingles as $single) {
                include '../views/card.php';
            }
            ?>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
