<?php
session_start();
require_once('model.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Establish database connection
    $dsn = 'mysql:host=localhost;dbname=ihm';
    $username_db = 'root';
    $password_db = '';
    try {
        $conn = new PDO($dsn, $username_db, $password_db);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Create UserModel object
        $userModel = new UserModel($conn);

        // Retrieve user data
        $user = $userModel->getUser($username, $password);

        // Check if user exists
        if ($user) {
            // User exists, set session
            $_SESSION['user'] = $user;
            header("Location: welcome.php"); // Redirect to welcome page
        } else {
            // User not found, redirect to login page
            header("Location: login_form.php?error=1");
        }
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
?>
