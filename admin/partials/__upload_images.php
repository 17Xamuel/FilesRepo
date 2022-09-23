<?php
include('__connection.php');
$pro_name = $_POST['pro_name'];
$img = $_FILES['image']['name'];
$temp_image = $_FILES['image']['tmp_name'];
$exe = pathinfo($img, PATHINFO_EXTENSION);
//Allow certain file formats
$allowTypes = array('jpg', 'png', 'jpeg', 'JPG', 'PNG', 'JPEG');
if (in_array($exe, $allowTypes)) {
    //renaming the image
    $fileName = uniqid() . '.' . $exe;
    echo $fileName;
    $targetDir = "../assets/uploads/img/". $fileName;
    if (move_uploaded_file($temp_image, $targetDir)) {
        //getting program id
        $qry = "SELECT * FROM program WHERE pro_name = '$pro_name'";
        $res = mysqli_query($conn, $qry);
        $exe1 = mysqli_fetch_assoc($res);
        $pro_id = $exe1['pro_id'];
        //inserting in to img table
        $qeury = "INSERT INTO image(img_name, pro_id)VALUES('$fileName','$pro_id')";
        $exe2 = mysqli_query($conn, $qeury);
        if($exe2){
            $mess = "Image uploaded successfully...";
            header("location: http://localhost/academic/admin/upload_images.php?mess=.'$mess'."); 
        }else{
            $mess = "Image not added".mysqli_error($conn);
            header("location: http://localhost/academic/admin/upload_images.php?mess=.'$mess'."); 
        }
    } else {
        $mess = "There was a problem while adding the image";
        header("location: http://localhost/academic/admin/upload_images.php?mess=.'$mess'.");
    }
} else {
    $mess = " Filetype is Not allowed";
    header("location: http://localhost/academic/admin/upload_images.php?mess=.'$mess'.");
}




