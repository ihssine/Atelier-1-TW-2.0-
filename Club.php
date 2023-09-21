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
public function afficherClub() {
        echo "id : " . $this->id . "<br>";
        echo "nom : " . $this->nom . "<br>";
        echo "description : " . $this->description . "<br>";
        echo "adresse : " . $this->adresse . "<br>";
        echo "domaine : " . $this->domaine . "<br>";
    }
}
?>
