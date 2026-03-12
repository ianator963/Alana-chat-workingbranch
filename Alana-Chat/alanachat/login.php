<?php
session_start();

/*
 * Temporary SSO entrypoint.
 * Real RIT SSO will be wired here using the OneLogin PHP SAML toolkit.
 *
 * Expected future flow:
 *   1. Create OneLogin\Auth object
 *   2. Call ->login()
 *   3. RIT sends user back to your ACS/callback endpoint
 *   4. Callback sets:
 *        $_SESSION['rit_uid']
 *        $_SESSION['rit_email']
 *        $_SESSION['rit_name']
 *        $_SESSION['rit_affiliation']
 */

if (isset($_SESSION['rit_uid'])) {
    header("Location: index.php");
    exit();
}

// For now, fail closed until SSO callback is added.
die("RIT SSO is not configured yet. Add the SAML toolkit config and ACS callback next.");
?>