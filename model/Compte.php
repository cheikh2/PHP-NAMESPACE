<?php
namespace model;
#######********                               *********##########
########******* Coding BY CHEIKH MBOW **********#########
#######*********                               *********##########
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Compte{
    private $idCompte, $numAgence, $rib, $montant;
    private $numCompte, $dateDebut, $dateFin, $typeCompte;
  

    //function de constructeur
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

 //function hydrate
 public function hydrate(array $data){
    foreach ($data as $key => $value) {
       $method= 'set'.ucfirst($key);

       if(method_exists($this, $method)){
           $this->$method($value);
       }
    }
}
 // the getters ou accessur
 public function getIdCompte(){ return $this->idCompte;}
 public function getNumAgence(){ return $this->numAgence;}
 public function getNumCompte(){ return $this->numCompte;}
 public function getRib(){ return $this->rib;}
 public function getMontant(){ return $this->montant;}
 public function getDateDebut(){ return $this->dateDebut;}
 public function getDateFin(){ return $this->dateFin;}
 public function getTypeCompte(){ return $this->typeCompte;}

// the setters ou mutateur
public function setIdCompte($idCompte){ $this->idCompte=$idCompte;}
public function setNumAgence($numAgence){$this->numAgence=$numAgence;}
public function setNumCompte($numCompte){$this->numCompte=$numCompte;}
public function setRib($rib){$this->rib=$rib;}
public function setMontant($montant){$this->montant=$montant;}
public function setDateDebut($dateDebut){$this->dateDebut=$dateDebut;}
public function setDateFin($dateFin){$this->dateFin=$dateFin;}
public function setTypeCompte($typeCompte){$this->typeCompte=$typeCompte;}
}