<?php


function addRdv($date_rendezvous,$heure_rendezvous, $motif_rendezvous,$medecin_souhaite,$type_rendezvous,$assurance_maladie,$patient_id)
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

    $sql = "INSERT INTO `rendez_vous` (`Date`, `Heure`, `Motif`, `medecin_id`, `type`, `Assurance`, `patient_id`) values (:date_rendezvous, :heure_rendezvous, :motif_rendezvous, :medecin_souhaite, :type_rendezvous, :assurance_maladie,:patient_id)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':date_rendezvous', $date_rendezvous);
    $stmt->bindParam(':heure_rendezvous', $heure_rendezvous);
    $stmt->bindParam(':motif_rendezvous', $motif_rendezvous);
    $stmt->bindParam(':medecin_souhaite', $medecin_souhaite);
    $stmt->bindParam(':type_rendezvous', $type_rendezvous);
    $stmt->bindParam(':assurance_maladie', $assurance_maladie);
    $stmt->bindParam(': :patient_id', $patient_id);


    try {
        $stmt->execute();
        echo "Rendez-vous inséré avec succès!";
    } catch (PDOException $e) {
        echo "Erreur d'insertion : " . $e->getMessage();
    }
}

?>