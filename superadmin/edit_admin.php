<?php
// session_start();
// if(!isset($_SESSION['id']))header('Location: ../index.php');
include("../admin/partials/__connection.php");
include('../superadmin/includes/header.php');
?>
<?php
$id = $_GET['user'];

if (isset($_POST['submit'])) {
    //    $wid = $_POST['wid'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $type = $_POST['type'];


    $sql = "UPDATE users SET first_name='$first_name', last_name= '$last_name',
     email='$email', phone='$phone', type='$type' WHERE user_id = '$id' ";

    $query = mysqli_query($conn, $sql);
    if ($query) {
        header("location: data.php");
    } else {
        echo "Failed to Update" . mysqli_error($conn);
    }
}
?>



<style>
    .reg {
        margin: 90px 0px 100px 10%;
        font-size: 15px;
    }
</style>

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
            <!-- /# row -->
            <section id="main-content">
                <h3 class="text-center">Edit User</h3>
                <form action="" method="POST">
                    <?php
                    include("../admin/partials/__connection.php");
                    $sql = "SELECT * FROM users WHERE  user_id = '$id'";
                    $query = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($query) > 0) {
                        while ($user = mysqli_fetch_array($query)) {
                            $first_name = $user['first_name'];
                            $last_name = $user['last_name'];
                            $email = $user['email'];
                            $phone = $user['phone'];
                            $type = $user['type'];

                            //first row
                            echo "<div class='form-row'>";
                            echo "<div class='form-group col-md-6'>";
                            echo "<input type='text' name='first_name'
                             placeholder='username' value='$first_name' class='form-control'/>";
                            echo "</div>";

                            echo "<div class='form-group col-md-6'>";
                            echo "<input type='text' name='last_name'
                             placeholder='Last Name' value='$last_name' class='form-control'/>";
                            echo "</div>";
                            echo "</div>";

                            // second row
                            echo "<div class='form-row'>";
                            echo "<div class='form-group col-md-6'>";
                            echo "<input type ='email' name='email'
                             placeholder= 'Email' value='$email' class='form-control'/>";
                            echo "</div>";

                            echo "<div class='form-group col-md-6'>";
                            echo "<input type ='text' name='phone'
                             placeholder= 'Phonenumber' value='$phone' class='form-control'/>";
                            echo "</div>";
                            echo "</div>";

                            echo "<div class='form-row'>";
                            echo "<div class='form-group col-md-6'>";
                            echo "<input type ='text' name='type'
                             placeholder= 'User Type' value='$type' class='form-control'/>";
                            echo "</div>";
                            echo "</div>";

                            echo "<div class = 'd-grid gap-2'>";
                            echo "<button class = 'btn btn-success' type='submit'
                name =' submit'>" . "Edit User" . "</button>";
                            echo "</div>";
                        }
                    }
                    ?>


                </form>
            </section>
        </div>
    </div>
</div>


<?php
include('../superadmin/includes/footer.php');


?>