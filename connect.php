<?php 

/* Attempt to connect to MySQL database */
$link = mysqli_connect("localhost", "anadolum", "7LTg9O3eniJVQBL", "abdulkadirbudak_com_dastan_agro");

$link->set_charset('utf-8');

// Check connection
if($link === false){ 
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if (!$link->set_charset('utf8mb4')) {
    printf("Error loading character set utf8mb4: %s\n", $mysqli->error);
    exit;
}


?> 
