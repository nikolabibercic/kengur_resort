<?php
session_start();
// Set session variables
$languageType = $_GET["languageType"];
$http = $_GET["http"];
$_SESSION["language"] = $languageType;

header("Location: ".$http);

?>