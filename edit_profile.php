<?php
include('admin/partials/__connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="170px"height ="170px" src="./users/assets/uploads/img/<?php echo $_SESSION['user_image']; ?>">
                    <span class="font-weight-bold"><?php echo ucfirst($_SESSION['first_name']); ?>
                    </span><span class="text-black-50"><?php echo $_SESSION['userid'] ?></span>
                    <span> </span>
                </div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Edit Profile</h4>
                    </div>
                    <form action="./users/partials/__edit_profile.php" method="POST" enctype="multipart/form-data">
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
                                            <!-- <h4>Welcome </h4> -->




                                            <!-- <img src="users/assets/uploads/img/logo.jpg" alt="" class="rounded-circle" height="100px" width="100px"><br><br> -->
                                        <?php

                                        }
                                        ?>
                                        <div class="row mt-2">
                                            <div class="col-md-6"><label class="labels">First Name</label><input type="text" class="form-control" placeholder="first name" value="<?php echo $row['first_name'] ?>" name="new_first_name"></div>
                                            <div class="col-md-6"><label class="labels">Last Name</label><input type="text" class="form-control" value="<?php echo $row['last_name'] ?>" placeholder="Last Name" name="new_last_name"></div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-12"><label class="labels">Profile Pic</label><input type="file" class="form-control" name="user_image"></div>
                                            <div class="col-md-12"><label class="labels">Registration Number</label><input type="text" class="form-control" placeholder="Enter Registration Number" value="<?php echo $row['reg_no'] ?>" name="new_reg_no"></div>
                                            <div class="col-md-12"><label class="labels">Students Number</label><input type="number" class="form-control" placeholder="enter students Number" value="<?php echo $row['stud_no'] ?>" name="new_stud_no">
                                            </div>
                                            <div class="col-md-12"><label class="labels">Email</label><input type="email" class="form-control" placeholder="enter email" value="<?php echo $row['email'] ?>" name="new_email"></div>
                                            <div class="col-md-12"><label class="labels">Phone Number</label><input type="text" class="form-control" placeholder="enter address line 2" value="<?php echo $row['phone'] ?>" name="new_phone"></div>

                                            <!--<div class="col-md-12"><label class="labels">Area</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div> 
                        <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value=""></div>
                        <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value=""></div>-->
                                        </div>
                                        <!-- <div class="row mt-3">
                                            <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                                            <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                                        </div> -->
                                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit" name="update">Save
                                                Profile</button></div>
                            <?php

                                }
                            }
                        }

                            ?>

                    </form>
                </div>
            </div>
            <!-- <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                    <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                    <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
                </div>
            </div> -->
        </div>
    </div>
    </div>
    </div>
    <style>
        body {
            background: rgb(9, 39, 120)
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #BA68C8
        }

        .profile-button {
            background: rgb(99, 39, 120);
            box-shadow: none;
            border: none
        }

        .profile-button:hover {
            background: #682773
        }

        .profile-button:focus {
            background: #682773;
            box-shadow: none
        }

        .profile-button:active {
            background: #682773;
            box-shadow: none
        }

        .back:hover {
            color: #682773;
            cursor: pointer
        }

        .labels {
            font-size: 11px
        }

        .add-experience:hover {
            background: #BA68C8;
            color: #fff;
            cursor: pointer;
            border: solid 1px #BA68C8
        }
    </style>
</body>

</html>