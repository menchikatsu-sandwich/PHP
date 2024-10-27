<?php
class CameraModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllCameras() {
        $stmt = $this->db->pdo->query("SELECT * FROM cameras WHERE stock > 0");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addCamera($name, $details, $stock) {
        $stmt = $this->db->pdo->prepare("INSERT INTO cameras (name, details, stock) VALUES (?, ?, ?)");
        return $stmt->execute([$name, $details, $stock]);
    }

    public function deleteCamera($id) {
        $stmt = $this->db->pdo->prepare("DELETE FROM cameras WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
