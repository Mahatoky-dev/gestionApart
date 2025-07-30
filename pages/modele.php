<?php
include("../dao/fonction.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">GAP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href=""> Statistique</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=""> Facturation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=""> Loyer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="modele.php?p=l_apart.php">Apartements</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <?php if (isset($_GET["p"])) {
            include($_GET["p"]);
        } else { ?>
            <h1>aucunne page charger</h1>
        <?php } ?>
    </main>

    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>