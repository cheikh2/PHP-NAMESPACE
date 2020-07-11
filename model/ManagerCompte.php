<?php
namespace model;
#######********                               *********##########
########******* Coding BY CHEIKH MBOW **********#########
#######*********                               *********##########
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../conf/autoload.php";

class ManagerCompte extends Manager
{


    //function d'ajout d'un nouvvel client physique
    public function AddCompte(Compte $compte)
    {
        $req = self::InsertUpdate(
            "INSERT INTO Compte (idCompte, numAgence, numCompte, rib, montant, dateDebut, dateFin, typeCompte) VALUES(?, ?, ?, ?, ?, ?, ?, ?)",
            array(
                $compte->getIdCompte(),
                $compte->getNumAgence(),
                $compte->getNumCompte(),
                $compte->getRib(),
                $compte->getMontant(),
                $compte->getDateDebut(),
                $compte->getDateFin(),
                $compte->getTypeCompte()
            )
        );

        if ($req) {
            echo '<div class="alert alert-success">Compte enregistré avec succés </div>';
        } else {
            echo '<div class="alert alert-danger">Erreur d\'enregistrement du nouvel Compte</div>';
        }
    }

    //function de liste de tabeau des Compte
    public function ListeCompte()
    {
        $req = self::FindAll("SELECT idCompte, numAgence , numCompte , TypeCompte , dateDebut, dateFin
    FROM Compte");
        return $req;
    }
}
