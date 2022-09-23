<?php
include('../../admin/partials/__connection.php');
$id = $_GET['pap_id'];
$approve = $_GET['approve'];
$q ="UPDATE paper SET approve = '$approve' WHERE pap_id = '$id'";
mysqli_query($conn, $q);
header('location: http://localhost/academic/users/session/paper_approve.php');
// if(isset($_POST['submit'])){
//     $approved = $_POST['approved'];
//     $not_approved = $_POST['not_approved'];
//     $user_id = $_POST['user_id'];
//     // echo $user_id;
//     $sql = "UPDATE users SET approval = '$approved' WHERE user_id = '$user_id'";

// }
?>