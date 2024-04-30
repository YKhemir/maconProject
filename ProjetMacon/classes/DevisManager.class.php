<?php
class DevisManager {

    private $_db;
    public function __construct($db){
        $this->setDb($db);
    }
        
    
    // CRUD 
    public function add(Devis $devis ){
        $q = $this->_db->prepare('INSERT INTO devis (nom, prenom,
        idUser, dateDevis, service, message)VALUES (:nom, :prenom, :idUser,:dateDevis, :service
        , :message)');
        $q->bindValue(':nom', $devis->getNom());
        $q->bindValue(':prenom', $devis->getPrenom());
        $q->bindValue(':idUser', $devis->getIdUser());
        $q->bindValue('dateDevis', $devis->getDateDevis());
        $q->bindValue(':service', $devis->getService());
        $q->bindValue(':message', $devis->getMessage());
        $q->execute();

        $devis->hydrate([
            'Id' => $this->_db->lastInsertId(),
        ]);
    }

    public function getDevis(){
        $q = $this-> _db->query('SELECT * FROM devis');
        $devisInfo = $q->fetch(PDO::FETCH_ASSOC);
        return  $devisInfo;

    }

    public function setDb(PDO $db){
        $this -> _db = $db;
    }
    

    


}
?>