<?php
include('./__connection.php');

$sql = "SELECT * FROM users";
$qry = mysqli_query($conn, $sql);
if(mysqli_num_rows($qry)>0){
while($row =mysqli_fetch_assoc($qry)){
    echo $row['email'];?>
    <br><?php
}
}

?>