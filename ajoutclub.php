<!DOCTYPE html>
<html>
<head>
    <title>ajoutclub</title>
</head>
<body>
    <h1>ajoutclub</h1>

    <?php
    class Club {
        private $id;
        private $nom;
        private $description;
        private $adresse;
        private $domaine;

        public function __construct($id, $nom, $description, $adresse, $domaine) {
            $this->id = $id;
            $this->nom = $nom;
            $this->description = $description;
            $this->adresse = $adresse;
            $this->domaine = $domaine;
        }
    }

    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $adresse = $_POST['adresse'];
    $domaine = $_POST['domaine'];

    $club1 = new Club ($id , $nom , $description , $adresse , $domaine);
    var_dump($club1);
    ?>

</body>
</html>
