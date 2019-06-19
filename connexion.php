<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
class Connexion {
    private $connec;
    private $user ;
    private $password ;

    public function __construct($db = 'hugosixfidcvbdd', $user = 'hugosixfidcvbdd', 
                                $password = 'Hugo123456') {
        $this->db = $db;
        $this->usr = $user;
        $this->password = $password;
        $this->connexion();
    }

    private function connexion(){
        try {
            $dbh = new PDO('mysql:host=hugosixfidcvbdd.mysql.db;dbname=hugosixfidcvbdd', 
            'hugosixfidcvbdd', 'Hugo123456');
            $this->connec = $dbh;
        } catch (PDOException $e) {
          echo 'Connexion échouée : ' . $e->getMessage();
        }
    }
    
    public function execute($sql) {
        $reponsesql = $this->connec->query($sql);
        while ($donnees = $reponsesql->fetch(PDO::FETCH_ASSOC)) {
            return $donnees;
        }
        $reponsesql->closeCursor();
    }
}
?>