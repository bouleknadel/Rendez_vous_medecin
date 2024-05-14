<?php
class UserModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getUser($username, $password) {
        $query = "SELECT * FROM users WHERE username=? AND password=?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$username, $password]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
