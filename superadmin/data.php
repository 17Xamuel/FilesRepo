<?php
include("../admin/partials/__connection.php");
include('../superadmin/includes/header.php');
// if(!isset($_SESSION['id']))header('Location: ../index.php');
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
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div>
                    <a style="margin-top: 10%; float:right;" class="btn btn-warning" href="dashboard.php">Previous</a>
                </div>
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <!-- <div class="page-header">
                        <div class="page-title">
                            <h1>Add Admin</h1>
                        </div>
                    </div> -->
                </div>

                <!-- /# column -->
            </div>

            <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/js/"> -->

            <h3 class="text-center">Users Available</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>uesr_id</th>
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
                    $sql = "SELECT * FROM users WHERE type = 'admin'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            $user_id = $row['user_id'];
                            echo "<tr>";
                            echo "<th ='row'>" . $row['user_id'] . "</th>";
                            echo "<td>" . $row['first_name'] . "</td>";
                            echo "<td>" . $row['last_name'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['phone'] . "</td>";
                            echo "<td>" . $row['type'] . "</td>";
                            //   procdural format
                            echo "<td>" . "<form Method='POST'>" . "<input type='hidden' value='$user_id' name='user_id'/>" . "<button type='submit' class='btn btn-danger' name='delete'>" . "Delete" . "</button>" . "</form>" . "</td>";
                            echo "<td>" . "<a href='edit_admin.php?user=$user_id'>" . "<button class='btn btn-success'>" . "Edit" . "</button>" . "</td>";
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


<?php
include('../superadmin/includes/footer.php');


?>