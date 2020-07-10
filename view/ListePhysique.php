<?php
#######********                               *********##########
########******* Coding BY CHEIKH MBOW **********#########
#######*********                               *********##########
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'header.php';

require_once "../conf/autoload.php";

use model\ManagerPhysique;


?>
    
    <div class="container">
      <h2>Clients Physique</h2>
    <div class="title-underline"></div>

<table class="bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Prenom </th>
        <th>Nom</th>
        <th>Adresse</th>
		<th>Email</th>
        <th>Telephone</th>
        <th>Sexe</th>
        <th>Profession</th>
        <th>CNI</th>
        <th>Salaire</th>
        <th>IdEmployeur</th>
    </tr>  
    </thead>
    <tfoot>
    <tr>
        <td>&nbsp;</td>        
        <td></td>
        <td></td>
    </tr>
    </tfoot>  

    <?php $manager= new ManagerPhysique;
          $listephysique=$manager->ListePhysique();
    foreach($listephysique as $liste) :?>
  <tr>
    <td><?= $liste->idPhysique;?></td>
    <td><?= $liste->prenom; ?></td>
    <td><?= $liste->nom;  ?></td>
    <td><?= $liste->adress; ?></td>
    <td><?= $liste->email; ?></td>
    <td><?= $liste->telephone;?></td>
    <td><?= $liste->sexe; ?></td>
    <td><?= $liste->profession ; ?></td>
    <td><?= $liste->cni; ?></td>
    <td><?=  $liste->salaire; ?></td>
    <td><?= $liste->idEmployeur; ?></td>
</tr>
<?php endforeach ?>  
</table>
    </div>