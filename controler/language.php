<?php
session_start();
// Set session variables
$languageType = $_GET["languageType"];

$_SESSION["language"] = $languageType;

header("Location: ../index.php");

?>