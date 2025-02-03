<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db="vodafone";

// vytvoření spojení
$mysqli = new mysqli($servername, $username, $password,$db);
$mysqli ->query("SET NAMES utf8");

// ověření spojení
if ($mysqli->connect_error) {
    die("Chyba připojení: " . $mysqli->connect_error);
}
?>