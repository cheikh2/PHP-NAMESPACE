<?php
namespace model;
#######********                               *********##########
########******* Coding BY CHEIKH MBOW **********#########
#######*********                               *********##########
use PDO;
use PDOException;

//use Config\DatabaseConfig;

error_reporting(E_ALL);
ini_set('display_errors', 1);

//require 'Config.php';

class Manager
{

    private $pdo;

    public function __construct()
    {
        $this->pdo = $this->getConnexion();
    }
    public function getConnexion()
    {
        try {
            $host = Config::params()[0];
            $dbname = Config::params()[1];
            $user = Config::params()[2];
            $mdp = Config::params()[3];

            $dsn = "mysql:host=$host;dbname=$dbname";
            $this->pdo = new \PDO($dsn, $user, $mdp, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            // echo "Connexion etablie";
        } catch (PDOException $ex) {
            die('Erreur:' . $ex->getMessage());
        }
        return $this->pdo;
    }
    //function principale d'ajout et de modification des tables du projet
    public function InsertUpdate($sql, $data = array())
    {
        $req = $this->pdo->prepare($sql);
        $req->execute($data);
        return $req;
    }

    //function principale  de Suppression des tables du projet
    public function delete($sql)
    {
        $req = $this->pdo->query($sql);
        return $req;
    }
    //function principale de la liste des donnes de chaque table du projet
    public function FindALL($sql)
    {
        $req = $this->pdo->prepare($sql);
        $req->execute();
        $tab = $req->fetchAll(PDO::FETCH_OBJ);
        return $tab;
    }

    //function de recuperation de l'id de la Table
    public function FindId($sql)
    {
        $req = $this->pdo->prepare($sql);
        $req->execute();
        $tab = $req->fetch(PDO::FETCH_OBJ);
        return $tab;
    }

    //function Principale de Recherche par Code des donnes d'un table du projet
    public function Search($sql, $data)
    {
        $req = $this->pdo->prepare($sql);
        $req->execute($data);
        $tab = $req->fetch(PDO::FETCH_OBJ);
        return $tab;
    }
}
