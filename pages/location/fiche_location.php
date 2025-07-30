<?php
if (isset($_SESSION["id_apart_select"])) {
    $idApart = $_SESSION["id_apart_select"];
    $listeLocataires = getLocataire($idApart);
    $responsable = getRespLocationApartement($idApart);
    $location = getCurrentLocation($idApart);
}
?>
<section class="fiche-location">
    <article class="resp-location">
        <h3>Reponsable : <?= $responsable["nom_resp"] ?></h3>
        <ul>
            <li>num 1 : <?= $responsable["num_resp_1"] ?></li>
            <li>num 2 : <?= $responsable["num_resp_2"] ?></li>
        </ul>
    </article>

    <article class="info-general">
        <h5>louer depuis : <?= $location["date_debut"] ?> par :</h5>
        <ul>
            <?php foreach ($listeLocataires as $locataire) { ?>
                <li><?= $locataire["nom"] ?></li>
            <?php } ?>
            <?php include("location/form_locataire.php"); ?>
        </ul>
    </article>
    <article class="action">
</section>