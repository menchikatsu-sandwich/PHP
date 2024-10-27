<?php
class UserModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function register($username, $password, $nama, $alamat, $role) {
        $stmt = $this->db->pdo->prepare("INSERT INTO users (username, password, nama, alamat, role) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$username, $password, $nama, $alamat, $role]);
    }

    public function getByUsername($username) {
        $stmt = $this->db->pdo->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
