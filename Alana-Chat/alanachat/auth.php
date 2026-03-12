<?php
session_start();

if (
    !isset($_SESSION['rit_uid']) ||
    !isset($_SESSION['rit_affiliation']) ||
    !in_array($_SESSION['rit_affiliation'], ['Student', 'Employee', 'StudentWorker'], true)
) {
    header("Location: login.php");
    exit();
}
?>