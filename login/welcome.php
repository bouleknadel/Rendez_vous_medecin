<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login_form.php");
    exit();
}
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo $user['username']; ?>!</h2>
    <!-- Other content for the welcome page -->
</body>
</html>
