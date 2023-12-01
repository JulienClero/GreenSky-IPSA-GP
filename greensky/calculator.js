function calculate() {
    
    var answer1 = document.getElementById("question1").value;

    
    var totalScore = 0;

    if (answer1 === "oui") {
        totalScore += 10;
    }

    
    alert("Votre score total est : " + totalScore);
}
