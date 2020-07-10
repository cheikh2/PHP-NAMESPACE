<?php
#######********                               *********##########
########******* Coding BY CHEIKH MBOW **********#########
#######*********                               *********##########
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../view/header.php';


?>
<div class="compteform">
  <h1>CREATION DE CLIENT Moral</h1>
</div>
<div class="main">
  <form  method="POST" action="../controller/AjoutMoral.php">
    <div id="name">

      <h2 class="client" id="client">Infos...client...Moral</h2>
      <div id="part1">

        <span id="missNomEmpl"></span><br>
        <label for="nomEmpl"></label>
        <input class="nomEmpl" type="text" name="nomEmpl" id="nomEmpl" placeholder="Nom de l'employeur" required>
        <small> <b> <?php if (!empty($error['nomEmpl'])) echo $error['nomEmpl'] ?> </b> </small>


        <span id="missNinea"></span><br>
        <label for="ninea"></label>
        <input class="ninea" type="text" name="ninea" id="ninea" placeholder="Ninea" required>
        <small> <b> <?php if (!empty($error['ninea'])) echo $error['ninea'] ?> </b> </small>


        <span id="missRc"></span><br>
        <label for="rc"></label>
        <input class="rc" type="rc" name="rc" id="rc" placeholder="Registre de commerce" required>
        <small> <b> <?php if (!empty($error['rc'])) echo $error['mail'] ?> </b> </small>


        <span id="missRaisonSocial"></span><br>
        <label for="raisonSocial"></label>
        <input class="raisonSocial" type="text" name="raisonSocial" id="raisonSocial" placeholder="Raison Sociale" required>
        <small> <b> <?php if (!empty($error['raisonSocial'])) echo $error['raisonSocial'] ?> </b> </small> <br>


        <span id="missAdressEmpl"></span><br>
        <label for="adressEmpl"></label>
        <input class="adressEmpl" type="text" name="adressEmpl" id="adressEmpl" placeholder="Adresse Employeur" required>
        <small> <b> <?php if (!empty($error['adressEmpl'])) echo $error['adressEmpl'] ?> </b> </small>

        <div class="butt">
          <input class="button" type="submit" name="ajouter" class="btn btn-outline-info my-2 my-sm-0" value="Ajouter" required>
          <input class="btn" type="reset" name="annuler" class="btn btn-outline-danger my-2 my-sm-0" value="Annuler" required>
        </div>

      </div>
    </div>
  </form>
</div>
</body>

</html>