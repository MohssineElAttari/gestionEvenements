<?php
class Database
{
    private $connexion;
    public function __construct()
    {
        $host = 'localhost';
        $dbname = 'evenements';
        $username = 'root';
        $password = '';
        try {
            $this->connexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function getConnexion()
    {
        return $this->connexion;
    }
}
