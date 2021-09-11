<?php

$serverName = "server adress";
$dBUsername = "username";
$dBPassword = "password";
$dBName = "databse name";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
     die("Connection Failed: " . mysqli_connect_error());
}
