<?php
include('./__connection.php');
$select_pro = "SELECT * FROM program JOIN image ON program.pro_id = image.pro_id
JOIN faculty ON faculty.fac_id = program.fac_id GROUP BY image.img_id ORDER BY faculty.fac_name";
$exe = mysqli_query($conn, $select_pro);
$data =mysqli_fetch_all($exe, MYSQLI_ASSOC);
echo json_encode($data);

?>
