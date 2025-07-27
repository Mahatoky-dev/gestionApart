<?php
$listeAparts = getAllApartements();
?>
<section class="list-apart">
    <h2>liste des apartements</h2>
    <?php foreach ($listeAparts as $apart) { ?>
        <a href="modele.php?p=f_apart.php&id_apart=<?= $apart["id_apart"] ?>">
            <article class="apartement">
                <h3>id : <?= $apart["id_apart"] ?></h3>
            </article>
        </a>
    <?php } ?>
</section>