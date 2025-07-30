<?php
if (isset($_SESSION["id_apart_select"])) {
    $idApart = $_SESSION["id_apart_select"];
    $listeLocataires = getLocataire($idApart);
    $responsable = getRespLocationApartement($idApart);
    $location = getCurrentLocation($idApart);
}
?>
<section class="fiche-location card">
    <article class="card-header">
        <h3 class="card-title" >locataire</h3>
    </article>
    <article class="resp-location card-body">
        <h4>responsable : <?= $responsable["nom_resp"] ?></h4>
        <ul>
            <li>num 1 : <?= $responsable["num_resp_1"] ?></li>
            <li>num 2 : <?= $responsable["num_resp_2"] ?></li>
        </ul>


        <section class="info-general">
            <h5>louer depuis : <?= $location["date_debut"] ?> par :</h5>
            <ul>
                <?php foreach ($listeLocataires as $locataire) { ?>
                    <li><?= $locataire["nom"] ?></li>
                <?php } ?>
            </ul>
        </section>

    </article>
    <article class="card-footer d-flex justify-content-between">
        <?php include("location/btn_arret_location.php"); ?>
        <?php include("location/btn_form_locataire.php"); ?>
    </article>
</section>