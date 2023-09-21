<?php
require_once 'config.php';

class Clubs {
    public function afficherClubs() {
        $conn = config::getConnexion();
        $sql = "SELECT * FROM club";
        $stmt = $conn->query($sql);

        if ($stmt) { 
            $rowCount = $stmt->rowCount(); 
            if ($rowCount > 0) {
                echo "<h2>Liste des Clubs :</h2>";
                echo "<ul>";

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<li>id: " . $row["id"] . " - nom: " . $row["nom"] . "</li>";
                }

                echo "</ul>";
            } else {
                echo "Aucun club trouvé.";
            }
        } else {
            echo "Erreur lors de la requête SQL.";
        }
    }
}

$clubs = new Clubs();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Affichage des Clubs</title>
</head>
<body>
    <?php
    $clubs->afficherClubs();
    ?>
</body>
</html>

