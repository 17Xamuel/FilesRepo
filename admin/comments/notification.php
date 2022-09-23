<?php
include('../partials/__connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./fonts/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="fonts"> -->
</head>
<body>
    <nav class="navbar">
        <ul>
            <li>
                <?php
                 $sql = "SELECT * FROM comment WHERE status ='0' ORDER BY com_id DESC";
                
                $res = mysqli_query($conn, $sql); 
                ?>

            <a href="#" id="notification"><label for="check"><i class="fa fa-bell" aria-hidden="true"></i></label>
            <div class="count"><?php echo mysqli_num_rows($res) ?></div>
        </a>
            <input type="checkbox" class="dropdown-checkbox" id="check">

             <ul class="dropdown">
                 <?php
                if (mysqli_num_rows($res)>0){
                    while($row = mysqli_fetch_assoc($res)){?>
                    <li><?php echo $row['message']?></li>
                    <?php

                    };
                    // print_r($row);
                }else{
                    echo mysqli_error($conn). 'no notification';

                }
                ?>
             </ul>
            </li>
        </ul>
    </nav>
    <script src ="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src ="./jquery.js"></script>
    <script>
        $(document).ready(function(){
            $("#notification").on("click", function(){
                $.ajax({
                    url: "readnotification.php",
                    success: function(res){
                        console.log(res);
                    }
                });
            });
        });
    </script>
</body>

</html>