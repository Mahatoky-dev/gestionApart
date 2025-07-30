<?php
if (isset($_SESSION["id_apart_select"])) {
    $idApart = $_SESSION["id_apart_select"];
    $currentLocation = getCurrentLocation($idApart);
    $apartEstEnLocation = $currentLocation != null;
    $btn_name = ($apartEstEnLocation) ? "ajouté" : "Commencé Location" ;
}
?>

<section class="form-locataire">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
        <?= $btn_name ?>
    </button>

    <div class="modal fade " id="formModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Location de l'apartement N° <?= $idApart ?></h2>
                    <button class="btn-close" data-bs-toggle="modal"></button>
                </div>
                <form action="../controleur/t_insert_locataire.php" method="get">
                    <div class="modal-body">

                        <?php if (!$apartEstEnLocation) { ?>
                            <h3>Responsable</h3>
                        <?php } else { ?>
                            <h3>Locataire</h3>
                        <?php } ?>


                        <input type="hidden" name="id_location" value="<?= $idLocation ?>">
                        <input type="text" name="nom" id="" placeholder="Nom">
                        <ul>
                            <li><input type="radio" name="sexe" id="" value="M"> homme</li>
                            <li><input type="radio" name="sexe" id="" value="F"> femme</li>
                        </ul>
                        <?php if (!$apartEstEnLocation) { ?>
                            <input type="hidden" name="resp" value="1">
                            <input type="tel" name="num_resp_1" id="" placeholder="numero 1">
                            <input type="tel" name="num_resp_2" id="" placeholder="numero 2">
                        <?php } ?>
                    </div>
                    <div class="modal-footer">
                        <a class="btn" href="" data-bs-toggle="modal">Close</a>
                        <input type="submit" value="Ajouter">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>