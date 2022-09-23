<?php
include("partials/__connection.php");
$id = $_GET['user'];

if (isset($_POST['submit'])) {
    //    $wid = $_POST['wid'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $type = $_POST['type'];


    $sql = "UPDATE users SET first_name='$first_name', last_name= '$last_name',
     email='$email', phone='$phone', type='$type' WHERE user_id = '$id' ";

    $query = mysqli_query($conn, $sql);
    if ($query) {
        header("location: data.php");
    } else {
        echo "Failed to Update" . mysqli_error($conn);
    }
}




// include("partials/__connection.php");
$sql = "SELECT * FROM users WHERE  user_id = '$id'";
$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query) > 0) {
    while ($user = mysqli_fetch_array($query)) {
        $first_name = $user['first_name'];
        $last_name = $user['last_name'];
        $email = $user['email'];
        $phone = $user['phone'];
        $type = $user['type'];
    }
}
