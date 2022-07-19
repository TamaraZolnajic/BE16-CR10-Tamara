<?php
$hostName = "127.0.0.1";
$userName = "root";
$password = "";
$dbName = "BE16_CR10_tamara_biglibrary";


$conn = mysqli_connect($hostName, $userName, $password, $dbName);

if (!$conn) {
    echo "error";
    exit;
}