<?php
session_start();
error_reporting(E_ALL);
if (isset($_POST['update'])) {
    include('../../admin/partials/__connection.php');
    $user_new_name = $_POST['update_user_name'];
    $user_new_email = $_POST['user_email'];
    $user_image =  $_FILES['user_image'];

    if (!empty($user_new_name) && !empty( $user_new_email )) {
        $image_name = $user_image['name'];
        $file_type = $user_image['type'];
        $file_size = $user_image['size'];
        $file_tmp_name = $user_image['tmp_name'];
        $file_error = $user_image['error'];

        $file_image_data = explode('/', $file_type);
        $file_extension = $file_image_data[count($file_image_data)-1];

        if ($file_extension == 'jpg' || $file_extension == 'png' || $file_extension == 'jpeg') {
            //process image
            if ($file_size < 5000000) {
                $file_new_name = "../../users/assets/uploads/img/" . $image_name;
                $uploaded = move_uploaded_file($file_tmp_name, $file_new_name);
                if ($uploaded) {
                    $loggedInUser = $_SESSION['userid']; 
                    $sql = "UPDATE users SET first_name = '$user_new_name', email = '$user_new_email', user_image = '$image_name' WHERE email = '$loggedInUser'";
                  
                    // $sql = "UPDATE users SET first_name = '$user_new_name', email ='$$user_new_email', user_image='$image_name' WHERE first_name = '$logged_in_user'";
                    $query1 = mysqli_query($conn, $sql);
                    if($query1){
                        header('location: ../../profile.php?success=userUpdated');
                        exit;

                    }else{
                        echo "Failed to Update" . mysqli_error($conn);
                    }
                   
                    
                }
            } else {
                header('location: ../../profile.php?error=invalidFileSize');
                exit;
            }
        } else {
            header('location: ../../profile.php?error=invalidFileType');
            exit;
        }
        // print_r($file_data);
    } else {
        header('location: ../../profile.php?error=emtyNameandEmail');
        exit;
    }
}
