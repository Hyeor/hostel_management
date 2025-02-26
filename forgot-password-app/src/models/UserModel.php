<?php
// filepath: forgot-password-app/src/models/UserModel.php
class UserModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function findUserByEmail($email) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch();
    }

    public function updateUserToken($email, $token) {
        $stmt = $this->pdo->prepare("UPDATE users SET reset_token = ? WHERE email = ?");
        return $stmt->execute([$token, $email]);
    }
}
?>