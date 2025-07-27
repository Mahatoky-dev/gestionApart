<?php 
include("../dao/fonction.php");
if($_SERVER["REQUEST_METHOD"] === "GET") {
    session_start();
    $id_apart = $_SESSION["id_apart_select"];
    insertLocation($id_apart);
    header("Location: ../pages/modele.php?p=location/form_locataire.php");
    exit();
}
?>
<a href="../pages/location/form_locataire.php"></a>