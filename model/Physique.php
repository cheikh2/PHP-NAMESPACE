<?php
namespace model;
#######********                               *********##########
########******* Coding BY CHEIKH MBOW **********#########
#######*********                               *********##########
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Physique{
    private $idPhysique, $prenom, $nom;
    private $adress, $email, $telephone, $sexe, $profession, $cni, $salaire, $idEmployeur;
  

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
 public function getIdPhysique(){ return $this->idPhysique;}
 public function getPrenom(){ return $this->prenom;}
 public function getNom(){ return $this->nom;}
 public function getAdress(){ return $this->adress;}
 public function getEmail(){ return $this->email;}
 public function getTelephone(){ return $this->telephone;}
 public function getSexe(){ return $this->sexe;}
 public function getProfession(){ return $this->profession;}
 public function getCni(){ return $this->cni;}
 public function getSalaire(){ return $this->salaire;}
 public function getIdEmployeur(){ return $this->idEmployeur;}

// the setters ou mutateur
public function setIdPhysique($idPhysique){ $this->idPhysique=$idPhysique;}
public function setPrenom($prenom){$this->prenom=$prenom;}
public function setNom($nom){$this->nom=$nom;}
public function setAdress($adress){$this->adress=$adress;}
public function setEmail($email){$this->email=$email;}
public function setTelephone($telephone){$this->telephone=$telephone;}
public function setSexe($sexe){$this->sexe=$sexe;}
public function setProfession($profession){$this->profession=$profession;}
public function setCni($cni){$this->cni=$cni;}
public function setSalaire($salaire){$this->salaire=$salaire;}
public function setIdEmployeur($idEmployeur){$this->idEmployeur=$idEmployeur;}
}