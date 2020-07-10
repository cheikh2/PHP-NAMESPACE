<?php
namespace model;
#######********                               *********##########
########******* Coding BY CHEIKH MBOW **********#########
#######*********                               *********##########
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../conf/autoload.php";

class ManagerPhysique extends Manager
{


    //function d'ajout d'un nouvvel client physique
    public function AddPhysique(Physique $physique)
    {
        $req = self::InsertUpdate(
            "INSERT INTO Physique VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )",
            array(
                $physique->getIdPhysique(),
                $physique->getPrenom(),
                $physique->getNom(),
                $physique->getAdress(),
                $physique->getEmail(),
                $physique->getTelephone(),
                $physique->getSexe(),
                $physique->getProfession(),
                $physique->getCni(),
                $physique->getSalaire(),
                $physique->getIdEmployeur()
            )
        );

        if ($req) {
            echo '<div class="alert alert-success">Client enregistré avec succés </div>';
        } else {
            echo '<div class="alert alert-danger">Erreur d\'enregistrement du nouvel Client</div>';
        }
    }


    //function de liste de tabeau des clients physiques
    public function ListePhysique()
    {
        $req = self::FindAll("SELECT * FROM Physique");
        return $req;
    }
}
