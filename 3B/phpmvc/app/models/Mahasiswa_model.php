<?php
    class Mahasiswa_model{
        private $dbh;
        private $stmt;
        public function __construct(){
            $dsn='mysql:host=localhost;dbname=phpmvc';

            try{
                $this->dbh=new PDO($dsn, 'root', '');
            } catch(PDOException $e) {
                die($e->getMessage());
            }
        }

        public function getALLmhs(){
            $this->stmt=$this->dbh->prepare('SELECT * from mahasiswa');
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>