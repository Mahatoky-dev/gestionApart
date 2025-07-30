<?php
$listeAparts = getAllApartements();
?>
<section class="list-apart container-fluid ">
    <div class="header-list d-flex justify-content-between">
        <h2>liste des apartements</h2>
        <?php include("apartement/add_apart.php") ;?>
    </div>

    <div class="row g-4 justify-content-around">
        <?php foreach ($listeAparts as $apart) { ?>
            <div class="col-12 col-sm-4 col-lg-3">

                <article class="apartement card ">
                    <h5 class="card-title m-2 ">id : <?= $apart["id_apart"] ?></h5>
                    <a href="modele.php?p=f_apart.php&id_apart=<?= $apart["id_apart"] ?>">
                        <img class="card-img-bottom" src="../image/apart.png" alt="">
                    </a>
                </article>

            </div>
        <?php } ?>
    </div>

</section>