<?php
include('model.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date_rendezvous = $_POST['date_rendezvous'];
    $heure_rendezvous = $_POST['heure_rendezvous'];
    $motif_rendezvous = $_POST['motif_rendezvous'];
    $medecin_souhaite = $_POST['medecin_souhaite'];
    $type_rendezvous = $_POST['type_rendezvous'];
    $assurance_maladie = $_POST['assurance_maladie'];
    $patient_id=2;
    addRdv( $date_rendezvous, $heure_rendezvous, $motif_rendezvous, $medecin_souhaite, $type_rendezvous, $assurance_maladie, $patient_id);


}


?>