<section class="add-apart">
    <button type="button" class="" data-bs-toggle="modal" data-bs-target="#form">
        +
    </button>

    <article class="modal fade" id="form">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="form" action="../controleur/t_insert_apart.php" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h4>ajout d'apartement</h4>
                    </div>
                    <div class="modal-body">

                        <input type="number" name="nb_chambre" id="" placeholder="nombre de chambre"> <br>
                        <input type="text" name="desc" id="" placeholder="description"> <br>
                        <input type="file" name="image" id="">

                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-bs-target="#form" data-bs-toggle="modal">
                            Close
                        </button>
                        <input type="submit" class="btn" value="ajouté">
                    </div>
                </form>
            </div>
        </div>
    </article>
</section>