<?php
include('./__connection.php');
// my form varables
$fisrt_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$reg_no = trim($_POST['reg_no']);
$stud_no = trim($_POST['stud_no']);
$password = md5($_POST['password']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$type = trim($_POST['type']);
$approval = trim($_POST['approval']);
$user_image = trim($_POST['user_image']);
// $pro_id = trim($_POST['pro_id']);



// $pro_id =$_POST['pro_id'];



// check if the user is not in thedatabse
$sql2 =  "SELECT * FROM users WHERE email = '$email' AND type = '$type'";
$exe2 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($exe2) > 0) {
    if ($type == 'super admin') {

        $mess = 'User already exist';
        header('location: http://localhost/academic/admin/add_super_admin.php?mess=' . $mess . '');
    } elseif ($type == 'admin') {
        // redirect to admin with messege
        $mess = 'User already exist';
        header('location: http://localhost/academic/admin/add_admin.php?mess=' . $mess . '');
    } else {
        // redirect to user with messege
        $mess = 'user already exist';
        header('location: http://localhost/academic/admin/sign_up.php?mess=' . $mess . '');
    }
} else {
    //lets validat before insert the record in the database

    if (strlen($fisrt_name) < 3 || strlen($last_name) < 3 || strlen($password) < 5 || strpos($email, '@') < 6 || strlen($phone) < 10) {
        if ($type == 'super admin') {

            // redirect to admin with messege
            $mess = 'Invalid input, recheck and try again';
            header('location: http://localhost/academic/admin/add_super_admin.php?mess=' . $mess . '');
        } elseif ($type == 'admin') {
            // redirect to admin with messege            
            $mess = 'Invalid input, recheck and try again';
            header('location: http://localhost/academic/admin/add_admin.php?mess=' . $mess . '');
        } else {
            // redirect to user with messege
            
            $mess = 'Invalid input, recheck and try again';
            header('location: http://localhost/academic/admin/sign_up.php?mess=' . $mess . '');
        }
    } else {

        // insert users into the db
        $sql3 = "INSERT INTO users(first_name, last_name, reg_no, stud_no, password, email, phone, type, approval, user_image)
                VALUES ('$fisrt_name', '$last_name', '$reg_no', '$stud_no', '$password', '$email','$phone', '$type', '$approval', '$user_image')";
        $exe3 = mysqli_query($conn, $sql3);
        if ($exe3) {
            if ($type == 'super admin') {
                // redirect to admin with messege
                $mess = 'inserted successfully';
                header('location: http://localhost/academic/admin/add_super_admin.php?mess=' . $mess . '');
            } elseif ($type == 'admin') {
                // redirect to admin with messege

                $mess = 'Admin registered successfullly';
                header('location: http://localhost/academic/admin/add_admin.php?mess=' . $mess . '');
            } else {
                // redirect to user with messege
                
                $mess = 'Details taken pliz wait for approval';
                header('location: http://localhost/academic/admin/sign_up.php?mess=' . $mess . '');
            }
        } else {

            if ($type == 'super admin') {
                $mess = 'There was an error';
                header('location: http://localhost/academic/admin/add_super_admin.php?mess=' . $mess . '');
            } elseif ($type == 'admin') {
                // redirect to admin with messege
                $mess = 'There was an error';
                header('location: http://localhost/academic/admin/sign_up.php?mess=' . $mess . '');
            } else {
                // redirect to user with messege
                $mess = 'There was an error';
                header('location: http://localhost/academic/admin/sign_up.php?mess=' . $mess . '');

            }
        }
    }
}
