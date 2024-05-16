<?php

// Vérification que la méthode de la requête est POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dsn = 'mysql:host=localhost;dbname=ihm;charset=utf8';
    $utilisateur = 'root';
    $mot_de_passe = '';

    try {
        $connexion = new PDO($dsn, $utilisateur, $mot_de_passe);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    // Lecture des données JSON envoyées dans le corps de la requête
    $json_data = file_get_contents('php://input');

    // Vérification que les données JSON ont été correctement reçues
    if ($json_data !== false) {
        // Décodage des données JSON en tableau associatif
        $data = json_decode($json_data, true);

        // Vérification que les données JSON ont été correctement décodées
        if ($data !== null) {
            $requete = $connexion->prepare("update rendez_vous set etat=:etat WHERE id=:id");
            $requete->bindParam(':etat', $data['etat']);
            $requete->bindParam(':id', $data['id']);
            // Traitement des données reçues
            // Par exemple, vous pouvez effectuer des opérations sur la base de données ou d'autres opérations en fonction des données reçues.
            // Ici, nous affichons simplement les données reçues.
            if ($requete->execute()) {
                echo "Champ mis à jour avec succès.";
            } else {
                echo "Une erreur est survenue lors de la mise à jour du champ.";
            }
        } else {
            // Envoi d'une réponse d'erreur si les données JSON n'ont pas pu être décodées
            http_response_code(400); // Bad Request
            echo "Erreur : Données JSON invalides.";
        }
    } else {
        // Envoi d'une réponse d'erreur si les données JSON n'ont pas pu être lues
        http_response_code(500); // Internal Server Error
        echo "Erreur : Impossible de lire les données JSON.";
    }
} else {
    // Envoi d'une réponse d'erreur si la méthode de la requête n'est pas POST
    http_response_code(405); // Method Not Allowed
    echo "Erreur : Seules les requêtes POST sont autorisées.";
}
?>