<?php
$id_apart = $_SESSION["id_apart_select"];
$responsable = getRespLocationApartement($id_apart);
?>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#conf">
    arreté location
</button>
<div class="modal fade" id="conf">
    <section class="modal-dialog confirmation-location" id="confirmation">
        <div class="modal-content">
            <div class="modal-header">
                <h2>voulez vous vraiment arreter la location de l'apart N° <?= $id_apart ?> ?</h2>
                <button class="btn-close" data-bs-toggler="modal"> </button>
            </div>
            <div class="modal-body">
                <p>Locataire actuele <strong><?= $responsable["nom_resp"] ?></strong></p>
            </div>
            <div class="modal-footer">
                <a class="btn" data-bs-toggle="modal" >Non</a>
                <a class="btn" href="../controleur/t_arret_location.php">Oui</a>
            </div>
        </div>
    </section>
</div>