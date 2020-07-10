<?php
#######********                               *********##########
########******* Coding BY CHEIKH MBOW **********#########
#######*********                               *********##########
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'header.php';

require_once "../conf/autoload.php";

use model\Manager;

?>
<div class="compteform">
  <h1>CREATION DE Compte</h1>
</div>
<div class="main">
  <form action="../controller/AjoutCompte.php" method="POST" id="myform1">
    <div id="name">

      <h2 class="client" id="client">Infos...compte...client</h2>
      <div id="part1">


        <span id="missNumAgence"></span><br>
        <label for="numAgence"></label>
        <input class="numAgence" type="text" name="numAgence" id="numAgence" placeholder="Numero Agence">
        <small> <b> <?php if (!empty($error['agence'])) echo $error['agence'] ?> </b> </small>


        <span id="missNumCompte"></span><br>
        <label for="comptelab"></label>
        <input class="numCompte" type="text" name="numCompte" id="numCompte" placeholder="Numero Compte">
        <small> <b> <?php if (!empty($error['compte'])) echo $error['compte'] ?> </b> </small>


        <span id="missRib"></span><br>
        <label for="rib"></label>
        <input class="rib" type="text" name="rib" id="rib" placeholder="rib">
        <small> <b> <?php if (!empty($error['rib'])) echo $error['rib'] ?> </b> </small>


        <label id="typeC">TypeCompte</label>
        <select class="typeCompte" name="typeCompte" id="typeCompte" onchange="compteStatus()">
          <?php
          $man = new Manager();
          $pdo = $man->getConnexion();
          $req = $pdo->prepare("SELECT * FROM TypeCompte ");
          $req->execute();
          while ($type = $req->fetch(PDO::FETCH_ASSOC)) {;
          ?>
            <option value="<?= $type['typeCompte'] ?>"> <?= $type['libelle'] ?> </option>
          <?php } ?>
        </select>

        <div id="frai">
          <label class="frais"> Attention ce compte necessite des frais d'ouverture</label>
          <input type="checkbox" id="frais" value="oui" />
        </div>

        <div id="agio">
          <label class="agios"> Attention ce compte necessite des agios</label>
          <input type="checkbox" id="agios" value="oui" />
        </div>

        <span id="missMontant"></span><br>
        <label for="montant"></label>
        <input class="montant" type="text" name="montant" id="montant" placeholder="Montant">

        <div id="duree">
          <span id="missDebut"></span><br>
          <label for="dateDebut"></label>
          <input class="dateDebut" type="date" name="dateDebut" id="dateDebut" placeholder="dateDebut">

          <span id="missFin"></span><br>
          <label for="dateFin"></label>
          <input class="dateFin" type="date" name="dateFin" id="dateFin" placeholder="dateFin">
          <span id="missSalaire"></span><br>
        </div>

        <span id="miss"></span><br>
        <label for="client"></label>
        <input class="clientT" type="text" name="clientT" id="clientT" placeholder="client">

        <div class="butt">
          <input class="button" type="submit" name="ajouter" class="btn btn-outline-info my-2 my-sm-0" value="Ajouter" required>
          <input class="btn" type="reset" name="annuler" class="btn btn-outline-danger my-2 my-sm-0" value="Annuler" required>
        </div>

      </div>
    </div>
  </form>
</div>
</body>
<script type="text/javascript" src="JS/Compte.js"></script>

</html>