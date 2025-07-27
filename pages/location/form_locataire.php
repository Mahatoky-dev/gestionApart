<?php
session_start();
if (isset($_SESSION["id_apart_select"])) {
    $idApart = $_SESSION["id_apart_select"];
    $currentLocation = getCurrentLocation($idApart);
    $idLocation = $currentLocation["id_location"];
    $responsable = getRespLocationApartement($idApart);
}
?>
<section class="form-locataire">
    <h2>Location de l'apartement N° <?= $idApart ?></h2>
    <?php if ($responsable == null) { ?>
        <h3>Responsable</h3>
    <?php } else { ?>
        <h3>Locataire</h3>
    <?php } ?>

    <form action="../controleur/t_insert_locataire.php" method="get">
        <input type="hidden" name="id_location" value="<?= $idLocation ?>">
        <input type="text" name="nom" id="" placeholder="Nom">
        <ul>
            <li><input type="radio" name="sexe" id="" value="M"> homme</li>
            <li><input type="radio" name="sexe" id="" value="F"> femme</li>
        </ul>
        <?php if ($responsable == null) { ?>
            <input type="hidden" name="resp" value="1">
            <input type="tel" name="num_resp_1" id="" placeholder="numero 1">
            <input type="tel" name="num_resp_2" id="" placeholder="numero 2">
        <?php } ?>

        <input type="submit" value="Ajouter">
    </form>
</section>