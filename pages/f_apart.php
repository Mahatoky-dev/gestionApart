<?php if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id_apart"])) {
    //sauvgarder dans une sesion l'id de l'apart selecitonné
    $id_apart = $_GET["id_apart"];
    $apart = getApart($id_apart);
    $_SESSION["id_apart_select"] = $id_apart;

    //gerer dinamiquement la taille du colonne contenant les info en fonction du disponibilité
    $col_info_apart = (apartementIsDispo($id_apart)) ? "col-lg-12" : "col-8";
} ?>
<section class="fiche-apartement container-fluid mt-3">
    <div class="row">
        <!-- article contenant les information utile de l'apartement -->
        <article class="info-general <?= $col_info_apart ?>">
            <h2>Apartement N° <?= $apart["id_apart"] ?></h2>
            <ul>
                <li>chambre : <?= $apart["nb_chambre"] ?></li>
                <li>description : <?= $apart["description"] ?></li>
            </ul>

            <?php
            //afficher le bouton d'action permetant d'afficher des modals de confirmatio de l'action 
            (apartementIsDispo($id_apart)) ? 
            include("location/form_locataire.php") : 
            include("location/confirm_arret_location.php"); 
            ?>
            
        </article>

        <!-- afficher les informations le la location en cours -->
        <article class="action-location col-lg-4 ">
            <?php if (!apartementIsDispo($id_apart)) {
                include("location/fiche_location.php"); ?>
            <?php } ?>
        </article>
    </div>
</section>