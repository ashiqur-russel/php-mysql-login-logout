<?php

    $dbHost = "localhost";
    $dbUser ="ashiq";
    $dbPass = "";
    $dbName ="contact";

    $conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
    
    if(!$conn){
                die("Database Connection failed");
    }

        

?>