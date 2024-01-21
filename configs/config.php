<?php

$server = "localhost";
$user = "mysql";
$pass = "mysql";
$database = "gold_db";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('koneksi terputus')</script>");
}

?>
