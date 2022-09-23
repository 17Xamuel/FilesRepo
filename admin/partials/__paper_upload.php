<?php

use function PHPSTORM_META\elementType;

include('__connection.php');
$description = $_POST['description'];
$cu_name = $_POST['cu_name'];
$yr_name = $_POST['yr_name'];
$pap_type = trim($_POST['pap_type']);
$approve = $_POST['approve'];

$sql1 = "SELECT * FROM paper";
$result = mysqli_query($conn, $sql1);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = '../assets/uploads/papers/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
    if (!empty($filename)) {
        if (!in_array($extension, ['zip','rar', 'pdf', 'docx', 'doc', 'jpeg', 'JPG', 'JPEG', 'PNG', 'png', 'jpg', 'pptx', 'ppt', 'txt'])) {
            // echo "You file extension is not supported";
            $mess = "You file extension is not supported";
            header("location: http://localhost/academic/admin/paper_upload.php?mess=.'$mess'.");
        } elseif ($_FILES['myfile']['size'] > 15000000) { // file shouldn't be larger than 1Megabyte
            echo "File size is too large!";
            $mess = "File size is too large!";
            header("location: http://localhost/academic/admin/paper_upload.php?mess=.'$mess'.");
        } else {
            // move the uploaded (temporary) file to the specified destination
            if (move_uploaded_file($file, $destination)) {

                // getting course unit id
                $qry = "SELECT * FROM course_unit WHERE cu_name = '$cu_name'";
                $res = mysqli_query($conn, $qry);
                $exe1 = mysqli_fetch_assoc($res);
                $cu_id = $exe1['cu_id'];

                // getting year id
                $qry1 = "SELECT * FROM year_of_study WHERE yr_name = '$yr_name'";
                $res1 = mysqli_query($conn, $qry1);
                $exe2 = mysqli_fetch_assoc($res1);
                $yr_id = $exe2['yr_id'];

                $type_image = ['jpeg', 'JPG', 'JPEG', 'PNG', 'png', 'jpg'];
                $type_pdf = ['pdf'];
                $type_word = ['docx', 'txt','doc'];
                $type_ppt = ['pptx','ppt'];
                $type_zip = ['zip','rar'];

                if (in_array($extension, $type_image)) {
                    $doc_category = 'image';
                  
                } elseif (in_array($extension, $type_pdf)) {
                    $doc_category = 'pdf';
                } elseif (in_array($extension, $type_word)) {
                    $doc_category = 'word';
                } elseif (in_array($extension, $type_ppt)) {
                    $doc_category = 'powerpoint';
                } elseif (in_array($extension, $type_zip)) {
                    $doc_category = 'zipped';
                }
                //             $sql2 = "INSERT INTO paper (pap_name, pap_type, doc_category, cu_id, yr_id, approve )
                //  VALUE('', '', '', '', '', '')";

                $sql2 = "INSERT INTO paper (pap_name, description, pap_type, doc_category, cu_id, yr_id, approve)
             VALUE ('$filename', '$description', '$pap_type', '$doc_category', '$cu_id', '$yr_id',  '$approve')";
                if (mysqli_query($conn, $sql2)) {
                    // echo "file uploaded";
                    $mess = "File uploaded successfully...";
                    header("location: http://localhost/academic/admin/paper_upload.php?mess=.'$mess'.");
                } else {
                    // echo "failed to upload" . mysqli_error($conn);
                    $mess = "Failed to upload a file" . mysqli_error($conn);
                    header("location: http://localhost/academic/admin/paper_upload.php?mess=.'$mess'.");
                }
            } else {
                $mess = "There was a problem while uploading the file";
                header("location: http://localhost/academic/admin/paper_upload.php?mess=.'$mess'.");
            }
        }
    } else {
        $mess = "Please Choose A File";
        header("location: http://localhost/academic/admin/paper_upload.php?mess=.'$mess'.");
    }
}
