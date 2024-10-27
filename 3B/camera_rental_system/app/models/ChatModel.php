<?php
class ChatModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    // Function to store chat messages between admin and customers
    public function storeMessage($senderId, $receiverId, $message) {
        $stmt = $this->db->pdo->prepare("INSERT INTO chats (sender_id, receiver_id, message, created_at) VALUES (?, ?, ?, NOW())");
        return $stmt->execute([$senderId, $receiverId, $message]);
    }

    // Function to retrieve chat messages based on camera and users
    public function getMessages($cameraId, $userId, $adminId) {
        $stmt = $this->db->pdo->prepare("SELECT * FROM chats WHERE (sender_id = ? OR receiver_id = ?) AND camera_id = ? ORDER BY created_at ASC");
        $stmt->execute([$userId, $adminId, $cameraId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
