document.addEventListener("DOMContentLoaded", function () {
    // Zoek de select en input elementen
    const genreSelect = document.getElementById("genre");
    const searchInput = document.getElementById("search-input");
    const resultsDiv = document.getElementById("results");

    // Voeg een "change" eventlistener toe aan het select-element
    genreSelect.addEventListener("change", function () {
        // Haal het geselecteerde genre op
        const selectedGenre = genreSelect.value;

        // Filter de muzieksingles op basis van het geselecteerde genre
        const filteredSingles = musicSingles.filter(function (single) {
            if (selectedGenre === "Alle genres" || single.genre === selectedGenre) {
                return true;
            }
            return false;
        });

        // Verwijder alle huidige resultaten
        resultsDiv.innerHTML = "";

        // Toon de gefilterde resultaten
        filteredSingles.forEach(function (single) {
            // Voeg de kaart toe aan de resultaten
            resultsDiv.innerHTML += `
                <div class="single">
                    <img src="${single.image}" alt="${single.title}">
                    <h2>${single.title}</h2>
                    <p>Artiest: ${single.artist}</p>
                    <p>Leeftijd: ${single.leeftijd}</p>
                    <p>Genre: ${single.genre}</p>
                </div>
            `;
        });
    });
});





