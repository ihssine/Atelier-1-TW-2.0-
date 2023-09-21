<!DOCTYPE html>
<html>
<head>
    <title>Traitement</title>
</head>
<body>
    <h1>Traitement</h1>

    <?php
    if (empty($_GET['id']) || empty($_GET['nom']) || empty($_GET['description']) || empty($_GET['adresse']) || empty($_GET['domaine']))
    {

        echo "<p>Champs manquants</p>";
    } 
    else 
    {
    $id = $_GET['id'];
    $nom = $_GET['nom'];
    $description = $_GET['description'];
    $adresse = $_GET['adresse'];
    $domaine = $_GET['domaine'];

    
    echo "<table border='1'>";
    echo "<tr><td> id : " .$id. "</tr></td>";
    echo "<tr><td> nom : " .$nom. "</tr></td>";
    echo "<tr><td> description : " .$description. "</tr></td>";
    echo "<tr><td> adresse : " .$adresse. "</tr></td>";
    echo "<tr><td> domaine : " .$domaine. "</tr></td>";
    echo "</table>";
    } 
    ?>
    </body>
</html>