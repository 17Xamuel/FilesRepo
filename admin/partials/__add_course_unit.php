<?php
include('./__connection.php');

$faculty_name = $_POST['faculty_name'];
$program_name = $_POST['program_name'];
$course_unit_name1 = trim($_POST['course_unit1']);
$course_unit_name2 = trim($_POST['course_unit2']);
$course_unit_name3 = trim($_POST['course_unit3']);
$course_unit_name4 = trim($_POST['course_unit4']);
$course_unit_name5 = trim($_POST['course_unit5']);

$course_unit = array($course_unit_name1, $course_unit_name2, $course_unit_name3, $course_unit_name4, $course_unit_name5);


for ($unit = 0; $unit < count($course_unit); $unit++) {
    $units = $course_unit[$unit];

    // chcking if the fied is not empty
    if (!empty($units)) {

        // get faculty id
        $select_fac = "SELECT * FROM faculty WHERE fac_name = '$faculty_name'";
        $exe = mysqli_query($conn, $select_fac);
        $faculty = mysqli_fetch_assoc($exe);
        $fac_id = $faculty['fac_id'];

        // get program id
        $select_pro = "SELECT * FROM program WHERE pro_name = '$program_name'";
        $exepro = mysqli_query($conn, $select_pro);
        $program = mysqli_fetch_assoc($exepro);
        $pro_id = $program['pro_id'];

        // check if the course unit does not exist in the db
        $sql1 = "SELECT * FROM course_unit WHERE cu_name = '$units'";
        $exe1 = mysqli_query($conn, $sql1);
        if (mysqli_num_rows($exe1) > 0) {
            $cu_messege =  $units . ' alrady exist...';
            header('http://localhost/academic/admin/add_course_unit.php?mess=' . $cu_messege . '');
        } else {
            // insert into the db
            $sql2 = "INSERT INTO course_unit(cu_name, pro_id, fac_id) VALUES ('$units', ' $pro_id', ' $fac_id')";
            $exe2 = mysqli_query($conn, $sql2);
            if ($exe2) {
                $cu_messege = 'Grograms added successfully...';
                header('location: http://localhost/academic/admin/add_course_unit.php?mess=' . $cu_messege . '');

            }else{
                $cu_messege = 'something went wrong!!!';
                header('location: http://localhost/academic/admin/add_course_unit.php?mess=' . $cu_messege . '');

            }
        }
    }else{
        header('location: http://localhost/academic/admin/add_course_unit.php?mess=');

    }
}
