<?php
session_start();
require_once "config.php";

if (isset($_SESSION['rit_uid'])) {
    header("Location: index.php");
    exit();
}

/*
 * Temporary SSO entrypoint.
 * Real RIT SSO logic will go here once the SAML toolkit and callback are added.
 */

die("RIT SSO is not configured yet. Add the SAML toolkit and callback endpoint next.");
?>