<?php
include('./__connection.php');

//adding faculties to database
$fac_name = trim($_POST['fac_name']);

if (!empty($fac_name)) {

    // check if it et exist in the db
    $check = "SELECT * FROM faculty WHERE fac_name = '$fac_name' ";
    $exe_check = mysqli_query($conn, $check);

    if (mysqli_num_rows($exe_check) > 0) {
        // if number rows is greater tha 0
        $fac_messege = 'faculty already exist...';
        header('location: http://localhost/academic/admin/add_faculty.php?mess='.$fac_messege.'');
    } else {

        // if number rows is less tha 0
        $qry = "INSERT INTO faculty (fac_name) VALUES('$fac_name')";
        $execute = mysqli_query($conn, $qry);

        // cheching success
        if ($execute) {
            // if success
            $fac_messege = 'Inserted successfully';
            header('location: http://localhost/academic/admin/add_faculty.php?mess='.$fac_messege.'');
        } else {

            // IF failure
            $fac_messege= 'there was some error!!!';
            header('location: http://localhost/academic/admin/add_faculty.php?mess='.$fac_messege.'');
        }
    }
}
