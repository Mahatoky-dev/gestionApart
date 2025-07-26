<?php
include("../dao/fonction.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>

    </header>
    <main>
        <?php if (isset($_GET["p"])) {
            include($_GET["p"]);
        } else { ?>
            <h1>aucunne page charger</h1>
        <?php } ?>
    </main>
</body>

</html>