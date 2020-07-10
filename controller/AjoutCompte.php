<?php
#######********                               *********##########
########******* Coding BY CHEIKH MBOW **********#########
#######*********                               *********##########
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../conf/autoload.php";

use model\ManagerCompte;
use model\Compte;

$manager = new ManagerCompte();


if (isset($_POST['ajouter'])) {

    $compte = new Compte(array(
        'numCompte' => trim($_POST['numCompte'], ''),
        'numAgence' => trim($_POST['numAgence'], ''),
        'rib' => trim($_POST['rib'], ''),
        'montant' => trim($_POST['montant'], ''),
        'dateDebut' => trim($_POST['dateDebut'], ''),
        'dateFin' => trim($_POST['dateFin'], ''),
        'idType' => trim($_POST['typeCompte'], '')
    ));

    $manager->AddCompte($compte); //Call fucntion Add Client

}
