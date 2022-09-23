<?php

include('../../admin/partials/__connection.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $status = $_POST['status'];


    $sql = "INSERT INTO comment (name, email, subject, message, status)
            VALUES ('$name', '$email', '$subject', '$message', '$status')";
    $result = mysqli_query($conn, $sql);
    if ($result) {

        header("location: ../academia/contact.php?success= posted");
        exit;
      
        // echo "<script>alert('comment added successfully.')</script>";
    } else {
        header("location: ../academia/contact.php?failure=notposted");
        exit;
       
    //     echo "<script>alert('comment does not add.')</script>";
    }
}?>
