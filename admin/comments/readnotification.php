<?php
include('../partials/__connection.php');
// include("config.php");



$sql = "UPDATE comment SET status='1'";
$res =mysqli_query($conn, $sql);
if($res){
    echo "success";
}else {
    echo "Failed".mysqli_error($conn);
}