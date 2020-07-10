<?php
#######********                               *********##########
########******* Coding BY CHEIKH MBOW **********#########
#######*********                               *********##########
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../conf/autoload.php";

use model\ManagerPhysique;
use model\Physique;



$manager = new ManagerPhysique();


if (isset($_POST['ajouter']) and isset($_POST['clienType'])) {
  if ($_POST['clienType'] == "salarie") {
    $physique = new Physique(array(
      'prenom' => trim($_POST['prenom'], ' '),
      'nom' => trim($_POST['nom'], ' '),
      'adress' => trim($_POST['adress'], ' '),
      'email' => trim($_POST['email'], ' '),
      'telephone' => trim($_POST['telephone'], ' '),
      'sexe' => trim($_POST['sexe'], ' '),
      'profession' => trim($_POST['profession'], ' '),
      'cni' => trim($_POST['cni'], ' '),
      'salaire' => trim($_POST['salaire'], ' '),
      'idEmployeur' => trim($_POST['idEmployeur'], ' ')
    ));
  } else {
    $physique = new Physique(array(
      'prenom' => trim($_POST['prenom'], ' '),
      'nom' => trim($_POST['nom'], ' '),
      'adress' => trim($_POST['adress'], ' '),
      'email' => trim($_POST['email'], ' '),
      'telephone' => trim($_POST['telephone'], ' '),
      'sexe' => trim($_POST['sexe'], ' '),
      'profession' => trim($_POST['profession'], ' '),
      'cni' => trim($_POST['cni'], ' ')

    ));
  }
  $manager->AddPhysique($physique);
}
