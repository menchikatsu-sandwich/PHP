<?php
class HistoryModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllHistory() {
        $stmt = $this->db->pdo->query("SELECT * FROM rental_history");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
