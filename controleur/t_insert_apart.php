<?php
include("../dao/fonction.php");
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["image"])) {
    $nb_chambre = $_POST["nb_chambre"];
    $desc = $_POST["desc"];
    $img_apart = $_FILES["image"];

    $uploadDir = "../upload/";
    $extention = pathinfo($img_apart["name"], PATHINFO_EXTENSION);
    $newName = uniqid("img_", true) . "." . $extention;
    var_dump($newName);

    var_dump(__DIR__);
    $uploadFile = $uploadDir . $newName;
    if (move_uploaded_file($img_apart["tmp_name"], $uploadFile)) {
        //insertion de l'image dans la base 
        if (addApart($nb_chambre, $desc)) {
            $idNewApart = getLastIssertId();
            insertImgApart($idNewApart, $newName);
            header("Location: ../pages/modele.php?p=l_apart.php");
            exit();
        } else {
            echo "oulala l'apart n'a pas été inseré dans la base";
        }
    } else {
        echo "erreur lors de l'upload de l'image";
    }
}
?>
<a href="../pages/modele.php?p=l_apart.php"></a>