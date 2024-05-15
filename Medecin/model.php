<?php
session_start();
function afficherRendezVous()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ihm";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
    }

    $sql = "SELECT rendez_vous.*,users.nom,users.prenom FROM `rendez_vous`,`users` where 
     users.id=rendez_vous.patient_id
     and 
     rendez_vous.medecin_id=:userid
     "; 
   
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':userid', $_SESSION['user']['id']);


    try {
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result; 
    } catch (PDOException $e) {
        echo "Erreur de sélection : " . $e->getMessage();
    }
}

?>
