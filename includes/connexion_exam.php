<?php
function bddConnect()
{
    static $connect = null ;

    if($connect === null)
    {
        
        $connect = mysqli_connect("localhost","ETU003949","IIDyOBvn","db_s2_ETU003949");
        
        if(!$connect)
        {
            die("echec de la connexion au base de donné : " . mysqli_connect_error());
        }
    }

    return $connect;
}

?>
