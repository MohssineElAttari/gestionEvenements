<?php
class Evenement
{
    //les attributs
    private $titre;
    private $adresse;
    private $date;
    private $description;
    private $ville;
    private $category;

    //constructeur initialisation
    function __construct($titre, $adresse, $date, $description, $ville, $category)
    {
        $this->titre = $titre;
        $this->adresse = $adresse;
        $this->date = $date;
        $this->description = $description;
        $this->ville = $ville;
        $this->category = $category;
    }

    //getter and setter
    public function getTitre()
    {
        return $this->titre;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getDescription()
    {
        return $this->description;
    }

    function getVille()
    {
        return $this->ville;
    }

    function getCategory()
    {
        return $this->category;
    }

    function setTitre($titre): void
    {
        $this->titre = $titre;
    }

    function setAdresse($adresse): void
    {
        $this->adresse = $adresse;
    }

    function setDate($date): void
    {
        $this->date = $date;
    }

    function setDescription($description): void
    {
        $this->description = $description;
    }

    function setVille($ville): void
    {
        $this->ville = $ville;
    }

    function setCategory($category): void
    {
        $this->category = $category;
    }
}
