<?php
include("./partials/__connection.php");
// if(!isset($_SESSION['id']))header('Location:../index.php');
if (isset($_POST['delete'])) {
    $user_id = $_POST['user_id'];

    $sql = "DELETE  FROM users WHERE user_id = $user_id";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        header("location: data.php");
    } else {
        // parse this code to check for the error
        echo "error occured" . mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete</title>
    <style>

    </style>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/js/">
</head>

<body>
    <div class="container data">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center">Users Available</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <!-- <th>uesr_id</th> -->
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>User Type</th>
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
                                //   procdural format
                                echo "<td>" . "<form Method='POST'>"
                                 ."<input type='hidden' value='$user_id' name='user_id'/>" .
                                  "<button type='submit' class='btn btn-danger' name='delete'>" .
                                   "Delete" . "</button>" . "</form>" .
                                     "</td>";
                                echo "<td>" . "<a href='edit_user.php?user=$user_id'>" . 
                                "<button class='btn btn-success'>" . "Edit" . "</button>" . "</td>";
                                //  pick a user by id, ?==where
                                echo "</tr>";
                            }
                        } else {
                            echo "No users available";
                        }
                        ?>

                        <!-- <tr>
                        <th>
                            <td>Mark</td>
                            <td>jacob</td>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <td>Mark</td>
                            <td>jacob</td>
                        </th>
                    </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>