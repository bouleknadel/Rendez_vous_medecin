<?php

require_once 'model.php';
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$motDePasse = $_POST['mot_de_passe']; // Changer la clé de $_POST pour correspondre à "password"
$dateNaissance = $_POST['dateNaissance']; // Changer la clé de $_POST pour correspondre à "date_naissance"
$type = $_POST['type'];

$userController = new User($nom, $prenom, $email, $motDePasse, $dateNaissance, $type);
$userController->createUser();
header(("Location:../login/login_form.php"));

?>
