<?php
function bddConnect()
{
    static $connect = null;

    if ($connect === null) {
        $connect = mysqli_connect("localhost", "root", "", "location_apart");

        if (!$connect) {
            die("echec de la connexion au base de donné : " . mysqli_connect_error());
        }
    }
    return $connect;
}
