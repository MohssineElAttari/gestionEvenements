<?php
include '../dao/IDao.php';
include '../classes/Database.php';
include '../classes/Evenement.php';

class EvenementService implements IDao
{
    private $connexion;

    function __construct()
    {
        $this->connexion = new Database();
    }

    public function create($obj)
    {
        // var_dump($obj);
        // echo $obj->getTitre();
        $query = "INSERT INTO evenement(titre,adresse,dateEvenement,ville,category,description) VALUES (:titre,:adresse,:dateEvenement,:ville,:category,:description)";

        $req = $this->connexion->getConnexion()->prepare($query);
       
        $req->execute([
            'titre' => $obj->getTitre(),
            'adresse' => $obj->getAdresse(),
            'dateEvenement' => $obj->getDate(),
            'ville' => $obj->getVille(),
            'category' => $obj->getCategory(),
            'description' => $obj->getDescription(),
        ]) or die('SQL');
        header('Location: ../view/events.php');
    }
    public function update($obj)
    {
        // $query = "UPDATE evenement SET WHERE id = " . $obj->getId();
        // $req = $this->connexion->getConnexion()->prepare($query);
        // $req->execute();
    }
    public function delete($id)
    {
        $query = "DELETE FROM evenement WHERE id =" . $id;

        $req = $this->connexion->getConnexion()->prepare($query);

        $req->execute() or die('SQL');

        header('Location: ../view/events.php');
    }

    public function findAll()
    {
        $query = "select * from evenement";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById($id)
    {
        // $query = "select * from evenement WHERE id = " . $id;
        // $req = $this->connexion->getConnexion()->prepare($query);
        // $req->execute();
        // return $req->fetch(PDO::FETCH_ASSOC);
    }
}
