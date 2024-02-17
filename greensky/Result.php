<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Result</title>
</head>
<body>
    <h1>Form Submission Result</h1>

    <?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve answers from the form
    
    // Partie Conception
    $matieres_premieres_1 = $_POST["matières_premières_1"];
    $matieres_premieres_2 = $_POST["matières_premières_2"];
    $matieres_premieres_3 = $_POST["matières_premières_3"];
    $remplacement_piece = $_POST["remplacement_piece"];
    $norme_iso = $_POST["norme_iso"]; // This will be an array since it's a checkbox
    
    // Partie Approvisionnement
    $certif = $_POST["certif"]; // This will be an array since it's a checkbox
    $distance_fournisseur1 = $_POST["distance_fournisseur1"];
    $moyen_transport1 = $_POST["moyen_transport1"];
    // ... Retrieve other fields in a similar manner

    // Partie Fabrication
    $procede = $_POST["procede"]; // This will be an array since it's a checkbox
    $stock = $_POST["stock"]; // This will be an array since it's a checkbox
    // ... Retrieve other fields in a similar manner
    
    // Partie Opération
    $energie_maintenance = $_POST["energie_maintenance"]; // This will be an array since it's a checkbox
    $produits_polluants_toxiques = $_POST["produits_polluants_toxiques"];
    // ... Retrieve other fields in a similar manner
    
    // Partie Recyclage
    $information_sur_produits = $_POST["information_sur_produits"];
    $controle_recyclage = $_POST["controle_recyclage"];
    // ... Retrieve other fields in a similar manner
    
    // Partie Recyclage
    $information_sur_produits = $_POST["information_sur_produits"];
    $controle_recyclage = $_POST["controle_recyclage"];
    // ... Retrieve other fields in a similar manner

    // Output the retrieved answers (you may want to store them in a database or do further processing)
    echo "Matières premières 1: $matieres_premieres_1<br>";
    echo "Matières premières 2: $matieres_premieres_2<br>";
    echo "Matières premières 3: $matieres_premieres_3<br>";
    echo "Remplacement pièce: $remplacement_piece<br>";
    echo "Normes ISO: " . implode(", ", $norme_iso) . "<br>";

    // Output for other sections in a similar manner
}
?>

    <p><a href="/calculator.html">Go back to the form</a></p>
</body>
</html>





