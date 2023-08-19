<?php

$server_name = "localhost";
$username = "root";
$password = "";
$database = "bookexchange";

$conn = mysqli_connect($server_name, $username, $password, $database);

if (!$conn) {
    die("Sorry connection failed!!!");
}
else{
    echo"connection successful";
}

?>