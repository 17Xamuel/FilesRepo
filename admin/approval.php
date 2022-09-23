<?php
session_start();
include("./partials/__connection.php");
// if(!isset($_SESSION['id']))header('Location:../index.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>approval</title>
    <style>

    </style>
    <link rel=”stylesheet” href=”https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css”>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/js/">
</head>

<body>
    <div class="container data">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center">Users Approval Status</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <!-- <th>uesr_id</th> -->
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>User Type</th>
                            <th >Approval status</th>
                            <th></th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM users WHERE type = 'user'";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                $user_id = $row['user_id'];
                                echo "<tr>";
                                // echo "<th ='row'>" . $row['user_id'] . "</th>";
                                echo "<td>" . $row['first_name'] . "</td>";
                                echo "<td>" . $row['last_name'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['phone'] . "</td>";
                                echo "<td>" . $row['type'] . "</td>";

                                if ($row['approval'] == 1) {
                                    echo "<td>" .
                                        '<button class = "btn btn-success"><a href = "./partials/__approval.php?user_id='
                                        . $row['user_id'] . '&approval=0" style = " text-decoration: none; color: white;">Approved</a></button>' . "</td>";
                                } else {
                                    echo "<td>" . '<button class="btn btn-primary"><a href = "./partials/__approval.php?user_id='
                                        . $row['user_id'] . '&approval=1" style = " text-decoration: none; color: white;">Approve</p></button>';
                                }
                                "</td>";
                               
                                echo "</tr>";
                                // }
                            }
                        } else {
                            echo "No users available";
                        }
                        ?>
                        <!-- <script>
                            function app() {
                                document.getElementById('approv').innerHTML = "approved";
                                document.getElementById('approv').style.color = "green";
                            }

                            function disapp() {
                                document.getElementById('disapprov').innerHTML = "approved";
                                document.getElementById('disapprov').style.color = "red";
                            }
                        </script>
                    </tbody> -->
                </table>
            </div>
        </div>
    </div>
</body>