<?php
// session_start();

include('./partials/__connection.php');
include_once('.././login.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/lib/helper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <!-- <div class="logo"><a href="index.html"> -->
                        <!-- <img src="assets/images/logo.png" alt="" /> -->
                        <!-- <span>Focus</span> -->
                    <!-- </a></div> -->
                <ul>
                    <li class="label">Main</li>
                    <li><a href="home.php"><i class="ti-calendar"></i> Dashboard </a></li>

                    <li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i> Faculties <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <!-- <li><a href="chart-flot.html">Management Sciences</a></li>
                            <li><a href="chart-morris.html">Health Sciences</a></li>
                            <li><a href="chartjs.html">Education</a></li> -->

                            <li><a href="view_faculties.php">Faculties & programs </a></li>
                            <li><a href="add_faculty.php?mess=''"><i class="ti-layout-grid2-alt"></i> Add Faculty </a></li>
                            <li><a href="delete_faculty.php?mess=''"><i class="ti-layout-grid2-alt"></i>Delete and Edit Faculty </a></li>

                            <!-- <li><a href="add_course_unit.php?mess=''"><i class="ti-layout-grid3"></i> Add Course units </a></li>
                            <li><a href="app-event-calender.html"><i class="ti-layout-grid2-alt"></i> Add Document </a></li> -->

                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i> programs <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="view_faculties.php">Faculties & programs </a></li>
                            <li><a href="add_programs.php?mess=''"><i class="ti-id-badge"></i> Add Program </a></li>
                            <li><a href="delete_program.php?mess=''"><i class="ti-layout-grid2-alt"></i>Delete And Edit Program </a></li>                     

                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i> Course Units <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <!-- <li><a href="view_faculties.php">Faculties & programs </a></li> -->
                            <li><a href="add_course_unit.php?mess="><i class="ti-id-badge"></i> Add Course Units </a></li>
                            <li><a href="delete_course_unit.php?mess="><i class="ti-layout-grid2-alt"></i>Delete And Edit Course Units </a></li>                     </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i>Documents <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <!-- <li><a href="view_faculties.php">Faculties & programs </a></li> -->
                            <li><a href="Home.php?mess="><i class="ti-id-badge"></i>Upload document </a></li>
                            <li><a href="delete_paper.php?mess="><i class="ti-layout-grid2-alt"></i>Delete Document </a></li>                     </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-user"></i> Users <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="view_users.php">Users available</a></li>
                            <li><a href="data.php?mess=''">Edit Users</a></li>
                            <!-- <li><a href="add_super_admin.php?mess=''">Add Super Admin</a></li> -->

                            <li><a href="add_users.php?mess=''">Add Students</a></li>
                            <li><a href="approval.php?mess=''">Approve Students</a></li>
                            <li><a href="paper_approve.php">Approve documents</a></li>

                        </ul>
                    </li>
                    <li><a href="view_statistics.php"><i class="ti-bar-chart-alt"></i> Statistics</a></li>
                    <!-- <li><a class="sidebar-sub-toggle">+ <i class="ti-user"></i>Add Users <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="add_super_admin.php?mess=">Add Super Admin</a></li>
                            <li><a href="add_admin.php?mess=">Add Admin</a></li>
                            <li><a href="add_users.php?mess=">Add User</a></li>
                        </ul>
                    </li>
                     -->
                    <li><a href="add_year.php?mess=''"><i class="ti-close"></i> Years</a></li>
                    <li><a href=".././logout.php"><i class="ti-close"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->


    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <?php
                                include('./partials/__connection.php');
                                $sql = "SELECT * FROM comment WHERE status = '0' ORDER BY com_id DESC";
                                $res = mysqli_query($conn, $sql); ?>
                                <!-- <div class="count"></div> -->
                                <i class="ti-bell" id="notification"><span class="count"><?php echo mysqli_num_rows($res) ?></span></i>



                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">

                                        <span class="text-left">Recent Notifications</span>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li><?php
                                                if (mysqli_num_rows($res) > 0) {
                                                    while ($row = mysqli_fetch_assoc($res)) { ?>
                                                        <a href="#">
                                                            <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                            <div class="notification-content">
                                                                <!-- <small class="notification-timestamp pull-right">02:34 PM</small> -->
                                                                <div class="notification-heading"><?php echo $row['name']; ?></div>
                                                                <div class="notification-text"><?php echo $row['message'] ?> </div>
                                                            </div>
                                                        </a>
                                                <?php

                                                    }
                                                } else {
                                                    echo mysqli_error($conn) . 'no notification';
                                                }
                                                ?>
                                            </li>


                                            <li class="text-center">
                                                <!-- <a href="#" class="more-link">See All</a> -->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <i class="ti-email"></i>
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">2 New Messages</span>
                                        <a href="email.html">
                                            <i class="ti-pencil-alt pull-right"></i>
                                        </a>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li class="notification-unread">
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/1.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Michael Qin</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="notification-unread">
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Michael Qin</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-profile">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                                <img src=".././users/assets/uploads/img/<?php echo $_SESSION['user_image']; ?>" alt="profile" class="rounded-circle" height="50px" width="50px" />
                                <span class="nav-profile-name text-dark" style="text-decoration: none; color:darkbue;">
                                    <!-- Ariong Benard -->
                                    <?php
                                    echo $_SESSION['first_name'];
                                    // echo $user_id;
                                    ?>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                                <!-- <a class="dropdown-item">
                                    <i class="mdi mdi-settings text-primary" id="notification"></i>
                                    Settings
                                </a> -->
                                <a href="../profile.php" class="dropdown-item">
                                    <i class="mdi mdi-settings text-primary"></i>
                                    Edit details
                                </a>
                                <!-- <a class="dropdown-item">
                                    <i class="mdi mdi-settings text-primary"></i>
                                    change password
                                </a> -->
                                <a class="dropdown-item">
                                    <i class="mdi mdi-logout text-primary"></i>
                                    <a href="../logout.php">Logout</a>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .count {
            position: absolute;
            right: 6px;
            top: 14px;
            border-radius: 50%;
            font-size: 1.0rem;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            color: #0066ff;
            width: 12px;
            height: 12px;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script src ="../comments/jquery.js"></script> -->
    <script>
        $(document).ready(function() {
            $("#notification").on("click", function() {
                $.ajax({
                    url: "http://localhost/academic/admin/comments/readnotification.php",
                    success: function(res) {
                        console.log(res);
                    }
                });

            });
        });
    </script>