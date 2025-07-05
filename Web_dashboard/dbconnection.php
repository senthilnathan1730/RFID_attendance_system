<?php
$connec = mysqli_connect("localhost", "root", "", "project");

if (!$connec) {
    die("connection error: " . mysqli_connect_error());
}

?>
