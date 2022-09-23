<?php
include('./__connection.php');

//adding years to database
$yr_name = trim($_POST['yr_name']);

if (!empty($yr_name)) {

    // check if it et exist in the db
    $check = "SELECT * FROM year_of_study WHERE yr_name = '$yr_name' ";
    $exe_check = mysqli_query($conn, $check);

    if (mysqli_num_rows($exe_check) > 0) {
        // if number rows is greater tha 0
        $fac_messege = 'Year already exist...';
        header('location: http://localhost/academic/admin/add_year.php?mess='.$fac_messege.'');
    } else {

        // if number rows is less tha 0
        $qry = "INSERT INTO year_of_study(yr_name) VALUES('$yr_name')";
        $execute = mysqli_query($conn, $qry);

        // cheching success
        if ($execute) {
            // if success
            $fac_messege = 'year added successfully';
            header('location: http://localhost/academic/admin/add_year.php?mess='.$fac_messege.'');
        } else {

            // IF failure
            $fac_messege= 'There was some error!!!';
            header('location: http://localhost/academic/admin/add_year.php?mess='.$fac_messege.'');
        }
    }
}else{
    $fac_messege = 'This field is required';
            header('location: http://localhost/academic/admin/add_year.php?mess='.$fac_messege.''); 
}
