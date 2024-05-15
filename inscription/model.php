<?php

include_once 'database.php';

class User {
    public $nom;
    public $prenom;
    public $email;
    public $password; // Modifier le nom de la variable pour correspondre à la colonne "password"
    public $date_naissance; // Modifier le nom de la variable pour correspondre à la colonne "date_naissance"
    public $type;

    public function __construct($nom, $prenom, $email, $motDePasse, $dateNaissance, $type) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->motDePasse = $motDePasse;
        $this->dateNaissance = $dateNaissance;
        $this->type = $type;
    }

    public function createUser() {
        $database = new Database();
        $db = $database->getConnection();
    
        $query = "INSERT INTO users (nom, prenom, email, password, date_naissance, type) VALUES (:nom, :prenom, :email, :motDePasse, :dateNaissance, :type)"; // Modifier les noms des colonnes pour correspondre à ceux de votre table
        
        try {
            $stmt = $db->prepare($query);
            $stmt->bindParam(":nom", $this->nom);
            $stmt->bindParam(":prenom", $this->prenom);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":motDePasse", $this->motDePasse);
            $stmt->bindParam(":dateNaissance", $this->dateNaissance);
            $stmt->bindParam(":type", $this->type);
            $stmt->execute();
            echo "User created successfully.";
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
}

?>
