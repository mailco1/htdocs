<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";
$connect = mysqli_connect($servername, $username, $password, $database);
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}



