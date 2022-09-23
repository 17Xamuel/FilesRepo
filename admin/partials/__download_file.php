<?php
include('__connection.php');

// Downloads files
if (isset($_GET['pap_id'])) {
    $id = $_GET['pap_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM paper WHERE pap_id=$pap_id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = '../assets/uploads/papers/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('../assets/uploads/papers/' . $file['pap_name']));
        readfile('uploads/' . $file['pap_name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE paper SET downloads=$newCount WHERE pap_id=$pap_id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}

?>