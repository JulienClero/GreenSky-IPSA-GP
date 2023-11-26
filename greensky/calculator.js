function calculate() {
    // Récupérer les réponses du formulaire
    var answer1 = document.getElementById("question1").value;

    // Effectuer les calculs en fonction des réponses
    // Exemple : si la réponse à la question 1 est "oui", ajouter 10 points

    var totalScore = 0;

    if (answer1 === "oui") {
        totalScore += 10;
    }

    // Ajouter d'autres calculs en fonction des autres questions

    // Afficher le résultat ou effectuer d'autres actions en fonction du score total
    alert("Votre score total est : " + totalScore);
}
