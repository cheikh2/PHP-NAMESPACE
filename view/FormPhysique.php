<?php
#######********                               *********##########
########******* Coding BY CHEIKH MBOW **********#########
#######*********                               *********##########
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../view/header.php';


?>
<div class="compteform">
    <h1>Création de client physique</h1>
</div>
<form action="../controller/AjoutPhysique.php" method="POST" id="myform">
    <div id="name">

        <div class="main">
            <h2 class="client" id="client">Infos_client</h2>
            <div id="part1"><br />

                <div class="clienT">
                    <input type="radio" name="clienType" id="clienType" value="salarie"> Salarie
                    <input type="radio" name="clienType" id="clienType" value="nonSalarie" onchange="clienType()"> Non Salaire
                </div>

                <span id="missPrenom"></span><br>
                <label for="prenomlab"></label>
                <input class="prenom" type="text" name="prenom" id="prenom" placeholder="Prenom du client">
                <small> <b> <?php if (!empty($error['pnom'])) echo $error['pnom'] ?> </b> </small>


                <span id="missNom"></span><br>
                <label for="nom"></label>
                <input class="nom" type="text" name="nom" id="nom" placeholder="Nom du client">
                <small> <b> <?php if (!empty($error['nom'])) echo $error['nom'] ?> </b> </small>


                <span id="missAdress"></span><br>
                <label for="adress"></label>
                <input class="adress" type="text" name="adress" id="adress" placeholder="Adresse du client">
                <small> <b> <?php if (!empty($error['adess'])) echo $error['adess'] ?> </b> </small>


                <span id="missEmail"></span><br>
                <label for="email"></label>
                <input class="email" type="email" name="email" id="email" placeholder="Email du client">
                <small> <b> <?php if (!empty($error['email'])) echo $error['email'] ?> </b> </small> <br>
                <small> <b> <?php if (!empty($error['mail'])) echo $error['mail'] ?> </b> </small>


                <span id="missTelephone"></span><br>
                <label for="telephone"></label>
                <input class="telephone" type="text" name="telephone" id="telephone" placeholder="Telephone  du client">
                <small> <b> <?php if (!empty($error['tel'])) echo $error['tel'] ?> </b> </small> <br>
                <small> <b> <?php if (!empty($error['optel'])) echo $error['optel'] ?> </b> </small>


                <span id="sexe"></span><br>
                <select class="sexe" name="sexe" id="sexe" value="sexe">
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                </select>

                <span id="missProfession"></span><br>
                <label for="profession"></label>
                <input class="profession" type="text" name="profession" id="profession" placeholder="Profession du client">
                <small> <b> <?php if (!empty($error['profession'])) echo $error['profession'] ?> </b> </small>

                <span id="missCni"></span><br>
                <label for="cni"></label>
                <input class="cni" type="text" name="cni" id="" placeholder="CIN du client">
                <small> <b> <?php if (!empty($error['cni'])) echo $error['cni'] ?> </b> </small>

                <span id="missSalaire"></span><br>
                <label for="salairelab"></label>
                <input class="salaire" type="number" name="salaire" id="salaire" placeholder="Salaire">
                <small> <b> <?php if (!empty($error['salaire'])) echo $error['salaire'] ?> </b> </small>

                <div class="idEmployeur">
                    <label for="idempl"></label>
                    <?php
                    require_once '../model/typeC.php';
                    ?>
                </div>

                <div class="butt">
                    <input class="button" type="submit" name="ajouter" class="btn btn-outline-info my-2 my-sm-0" value="Ajouter" required>
                    <input class="btn" type="reset" name="annuler" class="btn btn-outline-danger my-2 my-sm-0" value="Annuler" required>
                </div>
            </div>
        </div>
</form>
</div>
<script type="text/javascript" src="JS/Client.js"></script>
</body>

</html>