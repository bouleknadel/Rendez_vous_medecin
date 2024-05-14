<?php

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

    $sql = "SELECT * FROM `rendez_vous`"; 
    $stmt = $conn->prepare($sql);

    try {
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result; 
    } catch (PDOException $e) {
        echo "Erreur de sélection : " . $e->getMessage();
    }
}

?>
