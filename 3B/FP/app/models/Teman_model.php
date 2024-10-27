<?php
class Teman_model {
    private $dbh;
    private $stmt;

    public function __construct() {
        $dsn = 'mysql:host=localhost;dbname=friend_db';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Koneksi gagal: ' . $e->getMessage());
        }
    }

    public function tambahTeman($data) {
        try {
            $query = "INSERT INTO friend (nama, umur, jenis_kelamin, email, foto) VALUES (:nama, :umur, :jenis_kelamin, :email, :foto)";
            $this->stmt = $this->dbh->prepare($query);
            $this->stmt->bindParam(':nama', $data['nama']);
            $this->stmt->bindParam(':umur', $data['umur']);
            $this->stmt->bindParam(':jenis_kelamin', $data['jenis_kelamin']);
            $this->stmt->bindParam(':email', $data['email']);
            $this->stmt->bindParam(':foto', $data['foto']);
            return $this->stmt->execute();
        } catch (PDOException $e) {
            die('Kesalahan saat menambah data: ' . $e->getMessage());
        }
    }

    public function getALLtmn() {
        try {
            $this->stmt = $this->dbh->prepare('SELECT * FROM friend');
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die('Kesalahan saat mengambil data: ' . $e->getMessage());
        }
    }
}
?>