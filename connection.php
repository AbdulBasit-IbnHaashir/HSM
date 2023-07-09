<?php

    $database= new mysqli("localhost","root","","cuidado");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>