<?php
$host = "localhost";
$user = "shaqlinmondal1_l";
$pass = ")73yi2kX0CYb";
$db   = "shaqlinmondal1_liwaas";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database connection failed");
}
?>
