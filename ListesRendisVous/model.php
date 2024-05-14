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

    $sql = "SELECT * FROM `rendez_vous` where patient_id=:userid"; 
   
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
