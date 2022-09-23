<?php
include('./__connection.php');

$faculty_name = $_POST['faculty_name'];
$pro_name = trim($_POST['program_name']);
$pro_duration = trim($_POST['program_duration']);


// select from faculty table to get fuculty id
if (!empty($pro_name)) {
    $select_fac = "SELECT * FROM faculty WHERE fac_name = '$faculty_name'";
    $exe = mysqli_query($conn, $select_fac);
    $fuculty = mysqli_fetch_assoc($exe);
    $fac_id = $fuculty['fac_id'];

    // check if program already exist 

    $sql0 = "SELECT * FROM program WHERE pro_name = '$pro_name' ";
    $exe0 = mysqli_query($conn, $sql0);
    if (mysqli_num_rows($exe0) > 0) {

        $fac_messege =  $pro_name.' alrady exist...';
        header('http://localhost/academic/admin/add_programs.php?mess=' . $fac_messege . '');
    }else{

        // insert programs to the db
        $sql1 = "INSERT INTO program (pro_name, fac_id, duration) VALUES('$pro_name', '$fac_id', '$pro_duration')";
        $exe1 = mysqli_query($conn, $sql1);
        if ($exe1) {
            $fac_messege = $pro_name.' added successfully...';
            header('location: http://localhost/academic/admin/add_programs.php?mess=' . $fac_messege . '');
        }else{
            $fac_messege = 'There was a problem...'.mysqli_error($conn);
            header('location: http://localhost/academic/admin/add_programs.php?mess=' . $fac_messege . '');
        }
        
    }
    
    
    
    
    
    
} else {
    $fac_messege = 'Program. can not be empty..';
    header('location: http://localhost/academic/admin/add_programs.php?mess=' . $fac_messege . '');

}
