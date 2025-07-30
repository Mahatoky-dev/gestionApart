<?php
include("../dao/fonction.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] === "GET") {

    $idApart = $_SESSION["id_apart_select"];
    if (isset($_GET["resp"])) {
        insertLocation($idApart);
    }
    $id_location = getCurrentLocation($idApart)["id_location"];
    $nom = $_GET["nom"];
    $sexe = $_GET["sexe"];
    addLocataire($id_location, $nom, $sexe);
    var_dump("tafiditra condition get");

    if (isset($_GET["resp"])) {
        $numResp1 = $_GET["num_resp_1"];
        $numResp2 = $_GET["num_resp_2"];

        $idCurrentLocataire = getLastIssertId();
        addResponsable($id_location, $idCurrentLocataire, $numResp1, $numResp2);
    }

    header("Location: ../pages/modele.php?p=f_apart.php&id_location=$id_location&id_apart=$idApart");
    exit();
}
?>
<a href="../pages/modele.php?p=location/fiche_location.php"></a>