<?php
require("connexion.php");

function addApart($nbCambre,$description) {
    $sql = "INSERT INTO
                apartements (nb_chambre, description)
            VALUE (%s,'%s');";
    $sql = sprintf($sql,$nbCambre,$description);
    $request = mysqli_query(bddConnect(),$sql);

    return $request == null ? false : true;
}

function insertLocation($idApart) {
    $sql = "INSERT INTO 
                location (id_apart,date_debut,date_fin) 
            VALUE (%s,NOW(),'9999-01-01');";
    $sql = sprintf($sql,$idApart);
    $request = mysqli_query(bddConnect(),$sql);

    return $request == null ? false : true;
}

function addLocataire($idLocation,$nom,$sexe) {
    $sql = "INSERT INTO 
                locataire (id_location,nom,sexe) 
            VALUE (%s,'%s','%s');";
    $sql = sprintf($sql,$idLocation,$nom,$sexe);
    var_dump($sql);
    $request = mysqli_query(bddConnect(),$sql);

    return $request == null ? false : true;
}

function addResponsable($idLocation,$idLocataire,$numResp1,$numResp2) {
    $sql = "INSERT INTO 
                resp_location (
                    id_location,
                    id_locataire,
                    num_resp_1,
                    num_resp_2
                    )
            VALUE (
                %s,
                %s,
                '%s',
                '%s'
            );";
    $sql = sprintf($sql,$idLocation,$idLocataire,$numResp1,$numResp2);
    var_dump($sql);
    $request = mysqli_query(bddConnect(),$sql);

    return $request == null ? false : true;
}

function stopLocation($idLocation) {
     $sql = "UPDATE location 
            SET date_fin = NOW()
            WHERE id_location = %s;";
    $sql = sprintf($sql,$idLocation);
    var_dump($sql);
    $request = mysqli_query(bddConnect(),$sql);

    return $request == null ? false : true;
}
?>