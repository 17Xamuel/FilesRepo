<?php
session_start();
error_reporting(E_ALL);
if (isset($_POST['update'])) {
    include('../../admin/partials/__connection.php');
    $new_first_name = $_POST['new_first_name'];
    $new_last_name = $_POST['new_last_name'];
    $new_reg_no = $_POST['new_reg_no'];
    $new_stud_no = $_POST['new_stud_no'];
    $new_email = $_POST['new_email'];
    $new_phone = $_POST['new_phone'];
    $user_image =  $_FILES['user_image'];

     if (!empty($new_first_name) && !empty($new_email)) {
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
                    $sql = "UPDATE users SET first_name = '$new_first_name',last_name =' $new_last_name', reg_no = '$new_reg_no', stud_no = '$new_stud_no', email = ' $new_email', phone ='$new_phone', user_image = '$image_name' WHERE email = '$loggedInUser'";
                  
                    // $sql = "UPDATE users SET first_name = '$user_new_name', email ='$$user_new_email', user_image='$image_name' WHERE first_name = '$logged_in_user'";
                    $query1 = mysqli_query($conn, $sql);
                    if($query1){
                        header('location: ../../edit_profile.php?success=userUpdated');
                        exit;

                    }else{
                        echo "Failed to Update" . mysqli_error($conn);
                    }
                   
                    
                }
            } else {
                header('location: ../../edit_profile.php?error=invalidFileSize');
                exit;
            }
        } else {
            header('location: ../../edit_profile.php?error=invalidFileType');
            exit;
        }
        // print_r($file_data);
    } else {
        header('location: ../../edit_profile.php?error=emtyNameandEmail');
        exit;
    }
}
