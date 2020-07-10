<?php
namespace model;
#######********                               *********##########
########******* Coding BY CHEIKH MBOW **********#########
#######*********                               *********##########
error_reporting(E_ALL);
ini_set('display_errors', 1);

class ManagerMoral extends Manager
{


    //function d'ajout d'un nouvvel client physique
    public function AddMoral(Moral $moral)
    {
        $req = self::InsertUpdate(
            "INSERT INTO Moral VALUES(?, ?, ?, ?, ?, ? )",
            array(
                $moral->getIdMoral(),
                $moral->getNomEmpl(),
                $moral->getNinea(),
                $moral->getRc(),
                $moral->getRaisonSocial(),
                $moral->getAdressEmpl(),
            )
        );

        if ($req) {
            echo '<div class="alert alert-success">Client enregistré avec succés </div>';
            header("Location:ListeMoral.php");
        } else {
            echo '<div class="alert alert-danger">Erreur d\'enregistrement du nouvel Client</div>';
        }
    }

    //function de liste de tabeau des clients morals
    public function ListeMoral()
    {
        $req = self::FindAll("SELECT * FROM Moral");
        return $req;
    }
}
