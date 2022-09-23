<?php

include('admin/partials/__connection.php');
session_start();

//variable declaration
$email = '';
$password = '';
$errors = array();

if (isset($_POST['submit'])) {
    login();
}
function login()
{
    global $conn, $email, $errors;

    // grap form values
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email)) {
        // array_push($errors, "Username is required");
        echo '<script type = "text/javascript">alert("Email is required")</script>';
        //     echo "Email is required";
    }
    if (empty($password)) {
        // array_push($errors, "Password is required");
        echo '<script type = "text/javascript">alert("Password is Required")</script>';
        // echo "Password is Required";
    }


    // attempt login if no errors on form
    if (count($errors) == 0) {
        $password = md5($password);

        // $query = "SELECT * FROM users WHERE email=`$email` AND password=`$password` LIMIT 1";
        $query = "SELECT * FROM users WHERE email ='$email' AND password='$password'";
        $res = mysqli_query($conn, $query);
        $row = mysqli_num_rows($res);
        // echo $row;
        // echo ("row ".$row);

        // 


        if ($row == 1) {

            // user found
            // check if user is super admin, admin or user
            $logged_in_user = mysqli_fetch_assoc($res);


            if ($logged_in_user['type'] == 'admin') {

                $_SESSION['user'] = $logged_in_user;
                $_SESSION['success']  = "You are now logged in";
                $_SESSION['userid'] = $email;
                $_SESSION['first_name'] = $logged_in_user['first_name'];
                $_SESSION['user_image'] = $logged_in_user['user_image'];
                $_SESSION['id'] = $logged_in_user['user_id'];

                // direct to the admin page
                header('location:admin/home.php');
            } elseif ($logged_in_user['type'] == 'super admin') {

                $_SESSION['user'] = $logged_in_user;
                $_SESSION['success']  = "You are now logged in";
                $_SESSION['userid'] = $email;
                $_SESSION['first_name'] = $logged_in_user['first_name'];
                $_SESSION['user_image'] = $logged_in_user['user_image'];
                $_SESSION['id'] = $logged_in_user['user_id'];

                // direct to super admin page
                header('location:superadmin/dashboard.php');
            } else {
                if ($logged_in_user['approval'] == '1') {
                    $_SESSION['user'] = $logged_in_user;
                    $_SESSION['success']  = "You are now logged in";
                    $_SESSION['userid'] = $email;
                    $_SESSION['first_name'] = $logged_in_user['first_name'];
                    $_SESSION['user_image'] = $logged_in_user['user_image'];
                    $_SESSION['id'] = $logged_in_user['user_id'];

                    //direct to the users page
                    header('location:users/academia/');
                } else {
                    echo '<div id="close" class="alert alert-warning  text-center" style = "font-size:large;">
                    You are not yet approved to use our system
                    <span class="float-right text-dark" onClick="myFunction()">
                    x</span></div>';
                    // echo '<script type = "text/javascript">alert("You are not yet approved to use our system")</script>';
                    // echo "You are not yet approved to use our system";
                }
            }
        } else {
            // array_push($errors, "Wrong username/password combination");
            echo '<div id="close" class="alert alert-warning  text-center" style = "font-size:large;">
            Wrong username/password combination
                    <span class="float-right text-dark" onClick="myFunction()">
                    x</span></div>';
        }
    }
}
// if (isset($_GET['logout'])) {
// 	session_start();
// 	session_unset();
// 	session_destroy();
// 	unset($_SESSION['user']);
// 	header("location: login.php");
// }
?>

<script>
    function myFunction() {
        var x = document.getElementById("close");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>