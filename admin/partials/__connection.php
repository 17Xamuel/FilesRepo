<?php
$server = "localhost";
$user ="root";
$password = "";
$db = "academic";
$conn = mysqli_connect($server, $user, $password, $db);
if(!$conn){
    echo "connection failure";
}


?>