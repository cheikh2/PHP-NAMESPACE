<?php
namespace model;
#######********                               *********##########
########******* Coding BY CHEIKH MBOW **********#########
#######*********                               *********##########
error_reporting(E_ALL);
ini_set('display_errors', 1);


class Moral{
    private $idMoral, $nomEmpl;
    private $ninea, $rc, $raisonSocial, $adressEmpl;
  

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
 public function getIdMoral(){ return $this->idMoral;}
 public function getNomEmpl(){ return $this->nomEmpl;}
 public function getNinea(){ return $this->ninea;}
 public function getRc(){ return $this->rc;}
 public function getRaisonSocial(){ return $this->raisonSocial;}
 public function getAdressEmpl(){ return $this->adressEmpl;}

// the setters ou mutateur
public function setIdMoral($idMoral){ $this->idMoral=$idMoral;}
public function setNomEmpl($nomEmpl){$this->nomEmpl=$nomEmpl;}
public function setNinea($ninea){$this->ninea=$ninea;}
public function setRc($rc){$this->rc=$rc;}
public function setRaisonSocial($raisonSocial){$this->raisonSocial=$raisonSocial;}
public function setAdressEmpl($adressEmpl){$this->adressEmpl=$adressEmpl;}
}