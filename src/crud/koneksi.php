<?php

$servername ="localhost";
$username = "root";
$password = "Rifqee230203";
$db = "wheelz";
$conn = mysqli_connect($servername, $username, $password, $db);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>