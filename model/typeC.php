<?php
require_once "../conf/autoload.php";
use model\Manager;


$man = new Manager();
$pdo = $man->getConnexion();
$req = $pdo->prepare("SELECT * FROM Moral");
$req->execute();

?>
<select class="idEmployeur" type="text" name="idEmployeur" id="idEmployeur">
        <option value="">Choisir employeur</option>
        <?php
        while ($employeur = $req->fetch(\PDO::FETCH_ASSOC)) {;
        ?>
                <option value="<?= $employeur['idEmployeur'] ?>"> <?= $employeur['nomEmpl'] ?> </option>
        <?php } ?>
</select>