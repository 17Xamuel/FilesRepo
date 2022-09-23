<?php
include('__connection.php');
$id = $_GET['user_id'];
$approval = $_GET['approval'];
$q ="UPDATE users SET approval = '$approval' WHERE user_id = '$id'";
mysqli_query($conn, $q);
header('location: http://localhost\academic\admin\approval.php')
// if(isset($_POST['submit'])){
//     $approved = $_POST['approved'];
//     $not_approved = $_POST['not_approved'];
//     $user_id = $_POST['user_id'];
//     // echo $user_id;
//     $sql = "UPDATE users SET approval = '$approved' WHERE user_id = '$user_id'";

// }
?>