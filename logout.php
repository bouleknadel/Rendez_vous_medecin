<?php
// Démarrez la session si elle n'est pas déjà démarrée
session_start();

// Détruisez toutes les variables de session
$_SESSION = array();

// Si vous souhaitez détruire complètement la session, supprimez également le cookie de session
// Notez que cela détruira la session et pas seulement les données de session
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Détruisez la session
session_destroy();

// Redirigez l'utilisateur vers une page après la déconnexion
header("location: ./login/login_form.php");
exit;
?>
