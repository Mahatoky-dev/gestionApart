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
    $request = mysqli_query(bddConnect(),$sql);

    return $request == null ? false : true;
}

function stopLocation($idLocation) {
     $sql = "UPDATE location 
            SET date_fin = NOW()
            WHERE id_location = %s;";
    $sql = sprintf($sql,$idLocation);
    $request = mysqli_query(bddConnect(),$sql);

    return $request == null ? false : true;
}

function getAllApartements() {
    $sql = "SELECT id_apart FROM apartements;";
    $request = mysqli_query(bddConnect(),$sql);

    $listeAparts = array();
    while(($apart = mysqli_fetch_assoc($request)) != null) {
        $listeAparts[] = $apart;
    }
    return $listeAparts;
}

function apartementIsDispo($idApart) {
    $sql = "SELECT * FROM location WHERE id_apart = %s AND date_fin > NOW();";
    $sql = sprintf($sql,$idApart);
    $request = mysqli_query(bddConnect(),$sql);
    $nb_line = mysqli_num_rows($request);

    return ($nb_line == 0) ? true : false;
}

function getCurrentLocation($idApart) {
    $sql = "SELECT * FROM location WHERE id_apart = %s AND date_fin >= NOW();";
    $sql = sprintf($sql,$idApart);
    $request = mysqli_query(bddConnect(),$sql);
    return mysqli_fetch_assoc($request);
}

function getApart($idApart) {
    $sql = "SELECT * FROM apartements WHERE id_apart = %s;";
    $sql = sprintf($sql,$idApart);
    $request = mysqli_query(bddConnect(),$sql);
    return mysqli_fetch_assoc($request);
}

function getLastIssertId() {
    $sql = "SELECT LAST_INSERT_ID();";
    $request = mysqli_query(bddConnect(),$sql);
    return mysqli_fetch_assoc($request)["LAST_INSERT_ID()"];
}

function getRespLocationApartement($idApart) {
    $sql = "SELECT id_resp,nom_resp,num_resp_1 ,num_resp_2 FROM v_apart_resp WHERE id_apart = %s;";
    $sql = sprintf($sql,$idApart);
    $request = mysqli_query(bddConnect(),$sql);
    return mysqli_fetch_assoc($request);
}


function getLocataire($idApart) {
    $sql = "SELECT * FROM v_apart_locataire  WHERE id_apart = %s;";
    $sql = sprintf($sql,$idApart);
    $request = mysqli_query(bddConnect(),$sql);

    $listeLocataires = array();
    while(($loc = mysqli_fetch_assoc($request)) != null) {
        $listeLocataires[] = $loc;
    }
    return $listeLocataires;
}

//traitemnt des images 
function insertImgApart($idApart,$nameImage) {
    $sql = "INSERT INTO 
                img_apart 
            VALUES (
                %s,
                '%s'
            );";
    $sql = sprintf($sql,$idApart,$nameImage);
    $request = mysqli_query(bddConnect(),$sql);

    return $request == null ? false : true;
}

function getImageApart($idApart) {
    $sql = "SELECT * FROM img_apart WHERE id_apart = %s;";
    $sql = sprintf($sql,$idApart);
    $request = mysqli_query(bddConnect(),$sql);
    
    $listApart = array();
     while(($apart = mysqli_fetch_assoc($request)) != null) {
        $listApart[] = $apart;
    }
    return $listApart;
}
?>