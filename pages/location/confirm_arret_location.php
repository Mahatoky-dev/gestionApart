<?php
session_start();
$id_apart = $_SESSION["id_apart_select"];
$responsable = getRespLocationApartement($id_apart);
?>
<section class="confirmation-location">
    <h2>voulez vous vraiment arreter la location de l'apart N° <?= $id_apart ?> ?</h2>
    <p>Locataire actuele <strong><?= $responsable["nom_resp"] ?></strong></p>
    <ul>
        <li><a href="modele.php?p=f_apart.php&id_apart=<?= $id_apart ?>">Non</a></li>
        <li><a href="../controleur/t_arret_location.php">Oui</a></li>
    </ul>
    
    
</section>