<?php if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id_apart"])) {
    //sauvgarder dans une sesion l'id de l'apart selecitonné
    $id_apart = $_GET["id_apart"];
    $apart = getApart($id_apart);
    $_SESSION["id_apart_select"] = $id_apart;

    //gerer dinamiquement la taille du colonne contenant les info en fonction du disponibilité
    $col_info_apart = (apartementIsDispo($id_apart)) ? "col-lg-12" : "col-8";
} ?>
<section class="fiche-apartement container-fluid mt-3">
    <div class="row p-3 g-3">
        <!-- article contenant les information utile de l'apartement -->
        <article class=" card info-general <?= $col_info_apart ?>">
            <section class="card-header">
                <h2 class="card-title" >Apartement N° <?= $apart["id_apart"] ?></h2>
            </section>
            <section class="card-body">
                <ul>
                    <li>chambre : <?= $apart["nb_chambre"] ?></li>
                    <li>description : <?= $apart["description"] ?></li>
                </ul>

                <?php
                //afficher le bouton d'action permetant d'afficher des modals de confirmatio de l'action 
                if (apartementIsDispo($id_apart)) {
                    include("location/btn_form_locataire.php");
                }
                ?>
            </section>

            <div class="carousel slide col-12" id="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 " src="../image/apart.png" alt="">
                    </div>
                    <div class="carousel-item active">
                        <img class="d-block w-100 " src="../image/apart.png" alt="">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>

        </article>

        <!-- afficher les informations le la location en cours -->
        <article class="action-location col-lg-4 ">
            <?php if (!apartementIsDispo($id_apart)) {
                include("location/fiche_location.php"); ?>
            <?php } ?>
        </article>
    </div>
</section>