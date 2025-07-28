<?php if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id_apart"])) {
    $id_apart = $_GET["id_apart"];
    $apart = getApart($id_apart);
    session_start();
    $_SESSION["id_apart_select"] = $id_apart;
} ?>
<section class="fiche-apartement">
    <article class="info-general">
        <h2>Apartement N° <?= $apart["id_apart"] ?></h2>
        <ul>
            <li>chambre : <?= $apart["nb_chambre"] ?></li>
            <li>description : <?= $apart["description"] ?></li>
        </ul>
    </article>

    <article class="status">
        <?php if (apartementIsDispo($id_apart)) { ?>
            <h2>dispo</h2>
        <?php } ?>
    </article>

    <article class="action-location">
        <?php if (apartementIsDispo($id_apart)) { ?>
            <a href="location/confirm_location.php">Debuté Location</a>
        <?php } else { 
            include("location/fiche_location.php");
            ?>
            <a href="modele.php?p=location/confirm_arret_location.php">Arreté location</a>
        <?php } ?>
    </article>
</section>