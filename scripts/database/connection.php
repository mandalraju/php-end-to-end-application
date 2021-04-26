<?php
    // Defining constants for DATABASE Connectivity
    define("DB_SERVER", "localhost");
    define("DB_USERNAME","localhost");
    define("DB_PASSWORD","localhost");
    define("DB_NAME","admindashboard");


    // Attempting to connect to mysql database
    $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

    if(!$conn){
        die("Error: Could not connect to the database Server: ".mysqli_connect_error());
    }
?>