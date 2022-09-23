<?php
include('__connection.php');

//editing  A faculty
$fid = $_GET['fac'];

if (isset($_POST['submit'])) {
    $fac_name = $_POST['fac_name'];

    $sql = "UPDATE faculty SET fac_name = '$fac_name' WHERE fac_id = '$fid'";

    $query = mysqli_query($conn, $sql);
    if ($query) {
        header("location:http://localhost/academic/admin/delete_faculty.php");
    } else {
        echo "Failed to Update" . mysqli_error($conn);
    }
}

//Editing  A program
$pid1 = $_GET['pro'];
if (isset($_POST['program'])) {
    $pro_name = $_POST['pro_name'];

    $sql = "UPDATE program SET pro_name = '$pro_name' WHERE pro_id = '$pid1'";

    $query = mysqli_query($conn, $sql);
    if ($query) {
        header("location:http://localhost/academic/admin/delete_program.php");
    } else {
        echo "Failed to Update" . mysqli_error($conn);
    }
}


//Editing  A course unit
$cid1 = $_GET['cu'];
if (isset($_POST['course'])) {
    $cu_name = $_POST['cu_name'];

    $sql = "UPDATE course_unit SET cu_name = '$cu_name' WHERE cu_id = '$cid1'";

    $query = mysqli_query($conn, $sql);
    if ($query) {
        header("location:http://localhost/academic/admin/delete_course_unit.php");
    } else {
        echo "Failed to Update" . mysqli_error($conn);
    }
}


?>