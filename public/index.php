<!DOCTYPE html>
<html>
<head>
    <title>Muziek Singles</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js" defer></script>
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
            

            foreach ($musicSingles as $index => $single) {
                echo '<a href="detail.php?id=' . $index . '">';
                include '../views/card.php';
                echo '</a>';
            }
            ?>
        </div>
    </div>
</body>
</html>
