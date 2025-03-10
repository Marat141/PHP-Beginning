<?php

$db_host = "localhost";  
$db_user = "root";
$db_password = "";
$db_name = "skola";

$connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (mysqli_connect_error()) {
    echo ("Connection failed: " . mysqli_connect_error());
    exit();
};

echo "Connection successful";
