<?php

session_start();
// if(!isset($_SESSION['id']))header('Location:./index.php');
include('admin/partials/__connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <header>
        <?php
        // include('../includes/navigation.php');
        ?>
    </header>

    <div align="center">
        <h3>Update Profile</h3>

        <div class="row">
            <div class="col-md-6 offset-3">
                <?php
                if (isset($_GET['success'])) {
                    if ($_GET['success'] == 'userUpdated') {
                ?>
                        <small class="alert alert-success">User updated sucessfully</small>
                        <br>
                        <br>
                    <?php
                    }
                }
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == 'emtyNameandEmail') {
                    ?>
                        <small class="alert alert-danger">Name and Email required</small>
                        <br>
                        <br>
                    <?php
                    } elseif ($_GET['error'] == 'invalidFileType') {
                    ?>
                        <small class="alert alert-danger">Invalid file type, only images are allowed</small>
                        <br>
                        <br>

                    <?php
                    } else if ($_GET['error'] == 'invalidFileSize') {
                    ?>
                        <small class="alert alert-danger">Maximum of 5mb image is not allowed</small>
                        <br>
                        <br>
                <?php
                    }
                }
                ?>
                <form action="./users/partials/__profile.php" method="POST" enctype="multipart/form-data">
                    <?php
                    $current_user = $_SESSION['userid'];
                    $sql = "SELECT * FROM users WHERE email = '$current_user' ";
                    $qry = mysqli_query($conn, $sql);
                    if ($qry) {
                        if (mysqli_num_rows($qry) > 0) {
                            while ($row = mysqli_fetch_array($qry)) {
                                // print_r($row['email']);
                    ?>
                                <div class="nav-profile">
                                    <?php
                                    if (!isset($_SESSION['userid'])) {
                                    ?>
                                        <h3>login to access</h3>

                                    <?php
                                    } else {
                                    ?>
                                        <h4>Welcome <?php echo ucfirst($_SESSION['first_name']); ?></h4>
                                        
                                        
                                        <img src="./users/assets/uploads/img/<?php echo $_SESSION['user_image']; ?>" alt="" height="200px" width="200px" class="rounded-circle">

                                        <!-- <img src="users/assets/uploads/img/logo.jpg" alt="" class="rounded-circle" height="100px" width="100px"><br><br> -->
                                    <?php

                                    }
                                    ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="update_user_name" class="form-control" value="<?php echo $row['first_name'] ?>">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="user_email" class="form-control" value="<?php echo $row['email'] ?>">
                                </div>
                                <div class="form-group">
                                    <input type="file" name="user_image" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="update" class="btn btn-success" value="update">
                                </div>

                    <?php

                            }
                        }
                    }

                    ?>

                </form>
            </div>
        </div>


    </div>

</body>

</html>