<?php
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $idApart = $_SESSION["id_apart_select"];
    $listeLocataires = getLocataire($idApart);
    $responsable = getRespLocationApartement($idApart);
    $location = getCurrentLocation($idApart);
}
?>
<section class="fiche-location">
    <article class="info-general">
        <h5>louer depuis : <?= $location["date_debut"] ?></h5>
        <h4>liste locataire :</h4>
        <ul>
            <?php foreach ($listeLocataires as $locataire) { ?>
                <li><?= $locataire["nom"] ?></li>
            <?php } ?>
        </ul>
    </article>
    <article class="resp-location">
        <h3>Reponsable : <?= $responsable["nom_resp"] ?></h3>
        <ul>
            <li><?= $responsable["num_resp_1"] ?></li>
            <li><?= $responsable["num_resp_2"] ?></li>
        </ul>
    </article>
    <article class="action">
        <ul>
            <li>
                <a href="modele.php?p=location/form_locataire.php"> ajouter locatiare </a>
            </li>
        </ul>
    </article>
</section>