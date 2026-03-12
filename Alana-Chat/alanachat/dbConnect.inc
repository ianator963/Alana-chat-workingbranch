<?php

$db_host = "localhost";
$db_user = "YOUR_DB_USERNAME";
$db_pass = "YOUR_DB_PASSWORD";
$db_name = "YOUR_DB_NAME";

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($mysqli->connect_error) {
    die("Database connection failed");
}
?>