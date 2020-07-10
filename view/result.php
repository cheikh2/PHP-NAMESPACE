<?php

include_once '../model/Manager.php';

if(isset($_GET['monclef'])){
    $motclef = $_GET['monclef'];
    $q = array('motclef'=>$motclef. '%');
    $sql = 'SELECT * FROM Physique WHERE nom like :motclef';
   // $req = $this->pdo->prepare($sql);
    $req = $cnx->prepare($sql);
    $req->execute($q);

    $count = $req->rowCount($sql);
    
    if($count == 1){
        while($result = $req->fetch(PDO::FETCH_OBJ)){
            echo "nom :".$result->nom;
        }
    }
    else{
        echo "aucun resultat pour:".$motclef;
    }
}