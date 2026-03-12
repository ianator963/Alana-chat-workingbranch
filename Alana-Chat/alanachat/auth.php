<?php
session_start();
require_once "config.php";

if (
    !isset($_SESSION['rit_uid']) ||
    !isset($_SESSION['rit_affiliation']) ||
    !in_array(strtolower($_SESSION['rit_affiliation']), $ALLOWED_AFFILIATIONS, true)
) {
    header("Location: login.php");
    exit();
}
?>