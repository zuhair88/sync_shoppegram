<?php

    //database configuration
    $host       = "localhost";
    $user       = "mysecre1_demoz";
    $pass       = "qwerty123456!@#$%^";
    $database   = "mysecre1_demoz";
    //$host       = "demositez.tk";
    //$user       = "zuhair@demositez.tk";
    //$pass       = "Z11h@1r";
    //$database   = "mysecre1_demoz";

    $connect = new mysqli($host, $user, $pass, $database);

    if (!$connect) {
        die ("connection failed: " . mysqli_connect_error());
    } else {
        $connect->set_charset('utf8');
    }

    $ENABLE_RTL_MODE = 'false';
?>