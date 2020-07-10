<?php
#######********                               *********##########
########******* Coding BY CHEIKH MBOW **********#########
#######*********                               *********##########
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'header.php';

require_once "../conf/autoload.php";

use model\ManagerMoral;


?>
    
    <div class="container">
      <h2>Clients Moraux</h2>
    <div class="title-underline"></div>

<table class="bordered">
    <thead>
    <tr>
        <th>IdEmployeur</th>
        <th>Nom de l'Employeur</th>
        <th>Ninea</th>
		<th>Registre de commerce</th>
        <th>Raison Sociale</th>
        <th>Adresse</th>
    </tr>  
    </thead>
    <tfoot>
    <tr>
        <td>&nbsp;</td>        
        <td></td>
        <td></td>
    </tr>
    </tfoot>  

    <?php $manager= new ManagerMoral;
          $listemoral=$manager->ListeMoral();
    foreach($listemoral as $liste) :?>
  <tr>
    <td><?=  $liste->idEmployeur;?></td>
    <td><?=  $liste->nomEmpl;  ?></td>
    <td><?=  $liste->ninea; ?></td>
    <td><?= $liste->rc; ?></td>
    <td><?= $liste->raisonSocial;?></td>
    <td><?= $liste->adressEmpl; ?></td>
</tr>
<?php endforeach ?>  
</table>
    </div>