<?php
session_start();
if(!isset($_SESSION['id']))header('Location: ../../index.php');
include('../../admin/partials/__connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E-REPOSITORY - Online Academic Documents</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="../assets/uploads/img/logo.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center py-4 px-xl-5">
            <div class="col-lg-3">
                <a href="" class="text-decoration-none">
                    <h3 class="m-0">LIRA UNIVERSITY <span class="text-primary">E-</span>REPOSITORY</h3>
                </a>
            </div>
            <div class="nav-profile" style="position: absolute; /*or fixed*/ right: 10px;" >
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    <img src="../assets/uploads/img/<?php echo $_SESSION['user_image']; ?>" alt="profile" class="rounded-circle" height="50px" width="50px"/>
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
                        <i class="mdi mdi-settings text-primary"></i>
                        Settings
                    </a> -->
                    <a href="../../profile.php" class="dropdown-item">
                        <i class="mdi mdi-settings text-primary"></i>
                        Edit details
                    </a>
                    <!-- <a class="dropdown-item">
                        <i class="mdi mdi-settings text-primary"></i>
                        change password
                    </a> -->
                    <a class="dropdown-item">
                        <i class="mdi mdi-logout text-primary"></i>
                        <a href="../../logout.php">Logout</a>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="d-flex align-items-center justify-content-between bg-secondary w-100 text-decoration-none" data-toggle="collapse" href="#navbar-vertical" style="height: 67px; padding: 0 30px;">
                    <h5 class="text-primary m-0"><i class="fa fa-book-open mr-2"></i>Programs</h5>
                    <i class="fa fa-angle-down text-primary"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 9;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Midwifery <i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <p>Course Units</p>
                                <a href="" class="dropdown-item">Anatomy</a>
                                <a href="" class="dropdown-item">Phiciology</a>
                                <a href="" class="dropdown-item">Pharmacology</a>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link" data-toggle="dropdown">Computer Science <i class="fa fa-angle-down float-right mt-1"></i></a>
                                <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                    <p>Course Units</p>
                                    <a href="" class="dropdown-item">Computer Networks</a>
                                    <a href="" class="dropdown-item">Computer Literature</a>
                                    <a href="" class="dropdown-item">Web Design</a>
                                    <a href="" class="dropdown-item">Data Mining</a>
                                    <a href="" class="dropdown-item">Graphics</a>
                                    <a href="" class="dropdown-item">Knowledge Based</a>
                                </div>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link" data-toggle="dropdown">Public Health <i class="fa fa-angle-down float-right mt-1"></i></a>
                                    <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                        <p>Course Units</p>
                                        <a href="" class="dropdown-item">Anatomy</a>
                                        <a href="" class="dropdown-item">Phiciology</a>
                                        <a href="" class="dropdown-item">Pharmacology</a>
                                    </div>
                                    <div class="nav-item dropdown">
                                        <a href="#" class="nav-link" data-toggle="dropdown">Education <i class="fa fa-angle-down float-right mt-1"></i></a>
                                        <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                            <p>Course Units</p>
                                            <a href="" class="dropdown-item">Anatomy</a>
                                            <a href="" class="dropdown-item">Phiciology</a>
                                            <a href="" class="dropdown-item">Pharmacology</a>
                                        </div>
                                    </div>

                                    
                                </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0"><span class="text-primary">E</span>REPOSITORY</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav py-0">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="about.php" class="nav-item nav-link">Developers</a>

                            <a href="contact.php" class="nav-item nav-link">Feedback</a>
                        </div>
                        <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="../../logout.php">Log Out</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">COURSES</h5>
                <h1>Explore Top Courses</h1>
            </div>
            <div class="row">

                <section id="main-content">
                    <div class="row">
                        <!-- card code -->
                        <!-- <div class="col-3"> -->
                        <?php
                        $select_pro = "SELECT * FROM program JOIN image ON program.pro_id = image.pro_id
                        JOIN faculty ON faculty.fac_id = program.fac_id GROUP BY image.img_id ORDER BY faculty.fac_name";
                        $exe = mysqli_query($conn, $select_pro);
                        while ($row = mysqli_fetch_assoc($exe)) {
                            $pro_id = $row['pro_id']; ?>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <a href="../side/show_course_units.php?pro_id=<?php echo $row['pro_id'] ?>&pro_name=<?php echo $row['pro_name'] ?>" style="text-decoration:none;">
                                    <div class="cat-item position-relative overflow-hidden rounded mb-2" style="height: 200px; width: 190px;">
                                        <small class="text-warning" style="font-style: italic; font-weight: bold"><?php echo $row['fac_name']; ?></small>
                                        <div class="card-title">
                                            <img class="img-fluid" src="../../admin/assets/uploads/img/<?php echo trim($row['img_name']); ?>" alt="img" width="100%" height="60px">


                                            <div class="bg">
                                                <h5 class="my-2" style="font-weight: bold;"><?php echo $row['pro_name']; ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php
                        }

                        ?>
                        <!-- </div> -->
                        <!-- card code -->
                    </div>

                    <!-- /# main content -->
                </section>


              
    <!-- Registration End -->

    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Our Blog</h5>
                <h1>Upcoming Programs</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-4 mb-4">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/blog-1.jpg" alt="">
                        <a class="blog-overlay text-decoration-none" href="">
                            <h5 class="text-white mb-3">Library Management & Record Keeping</h5>
                            <p class="text-primary m-0">Jan 01, 2023</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/blog-2.jpg" alt="">
                        <a class="blog-overlay text-decoration-none" href="">
                            <h5 class="text-white mb-3">Law</h5>
                            <p class="text-primary m-0">Jan 01, 2024</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/blog-3.jpg" alt="">
                        <a class="blog-overlay text-decoration-none" href="">
                            <h5 class="text-white mb-3">Medicine</h5>
                            <p class="text-primary m-0">Jan 01, 2023</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Lectures</h5>
                <h1>Meet Our Lecturers</h1>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h6>Abarikurungi Budget</h6>
                            <p class="m-0">Web Designer</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Mr.Ogwal Kenneth</h5>
                            <p class="m-0">System analyst</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Mr.Ojuka Nelson</h5>
                            <p class="m-0">Head Of Depaetment</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Mr.Bahitya Patrick</h5>
                            <p class="m-0">Web Designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial End -->



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-7 col-md-12">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Lira City, Lira University</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+256 775 297 034</p>
                        <p><i class="fa fa-envelope mr-2"></i>lirauni@gmail.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Our Courses</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Web Design</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Apps Design</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Marketing</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Research</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>SEO</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 mb-5">
                <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Newsletter</h5>
                <p>Rebum labore lorem dolores kasd est, et ipsum amet et at kasd, ipsum sea tempor magna tempor. Accu
                    kasd sed ea duo ipsum. Dolor duo eirmod sea justo no lorem est diam</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Your Email Address">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#">Tripple A Developuers</a>. All Rights Reserved. Designed by
                    <a href="https://htmlcodex.com">TAD Codex</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <!-- Link to trigger modal -->


    <!-- Modal popup box -->
    <div id="mpopupBox" class="mpopup">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close"></span>
                <h1> YEAR OF STUDY</h1>
                <!-- <h2>Simple Modal Popup</h2> -->
            </div>
            <div class="modal-body">
                <div class="dropdown">
                    <nav>
                        <ul>
                            <li><a href="#">choose the year</a>
                                <ul>
                                    <li><a href="#">year 1</a>
                                        <ul>
                                            <li><a href="lcsyear1sem1.php">SEM I</a></li>
                                            <li><a href="lcsyear1sem2.php">SEM 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">year 2</a>
                                        <ul>
                                            <li><a href="#">SEM I</a></li>
                                            <li><a href="#">SEM 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">year 3</a>
                                        <ul>
                                            <li><a href="#">SEM I</a></li>
                                            <li><a href="#">SEM 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">year 4</a>
                                        <ul>
                                            <li><a href="#">SEM I</a></li>
                                            <li><a href="#">SEM 2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>



    <script>
        var mpLink1 = document.getElementById("mpopupLink");
        var mpLink2 = document.getElementById("cepopupLink");
        var mpLink3 = document.getElementById("mfpopupLink");
        var mpLink4 = document.getElementById("phpopupLink");
        var mpLink5 = document.getElementById("bapopupLink");
        var mpLink6 = document.getElementById("bcpopupLink");
        var mpLink7 = document.getElementById("cppopupLink");
        var mpLink8 = document.getElementById("papopupLink");

        function popup(Link) {
            // Select modal
            var mpopup = document.getElementById('mpopupBox');

            // Select trigger link

            // Select close action element
            var close = document.getElementsByClassName("close")[0];

            // Open modal once the link is clicked
            Link.onclick = function() {
                mpopup.style.display = "block";
            };

            // Close modal once close element is clicked
            close.onclick = function() {
                mpopup.style.display = "none";
            };

            // Close modal when user clicks outside of the modal box
            window.onclick = function(event) {
                if (event.target == mpopup) {
                    mpopup.style.display = "none";
                }
            };
        }
        popup(mpLink1)
        popup(mpLink2)
        popup(mpLink3)
        popup(mpLink4)
        popup(mpLink5)
        popup(mpLink6)
        popup(mpLink7)
        popup(mpLink8)
    </script>
    <style>
        .mpopup {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            position: relative;
            background-color: #fff;
            margin: auto;
            padding: 0;
            width: 450px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s;
            border-radius: 0.3rem;
        }

        .modal-header {
            padding: 2px 12px;
            background-color: #f5f5f5;
            color: #333;
            border-bottom: 1px solid #e9ecef;
            border-top-left-radius: 0.3rem;
            border-top-right-radius: 0.3rem;
        }

        .modal-header h2 {
            font-size: 1.25rem;
            margin-top: 14px;
            margin-bottom: 14px;
        }

        .modal-body {
            padding: 2px 12px;
            height: 350px;

        }

        .modal-footer {
            padding: 1rem;
            background-color: #ffffff;
            color: #333;
            border-top: 1px solid #e9ecef;
            border-bottom-left-radius: 0.3rem;
            border-bottom-right-radius: 0.3rem;
            text-align: right;
        }

        .close {
            color: #888;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        /* add animation effects */
        @-webkit-keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }

            to {
                top: 0;
                opacity: 1
            }
        }

        @keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }

            to {
                top: 0;
                opacity: 1
            }
        }





        .dropdown {
            margin: 0 auto;
        }

        nav {
            height: 60px;
            background: #2c3e50;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        nav ul {
            padding: 0;
            margin: 0;
            float: left;
            margin-right: 30px;
        }

        nav ul li {
            background: #2c3e2c50;
            position: relative;
            list-style: none;
            display: inline-block;
        }

        nav ul li a {
            display: block;
            padding: 0 15px;
            color: white;
            text-decoration: none;
            line-height: 60px;
            font-size: 20px;
        }

        nav ul li a:hover {
            background: #143342;
        }

        nav ul ul {
            position: absolute;
            top: 60px;
            display: none;

        }

        nav ul li:hover>ul {
            display: block;
        }

        nav ul ul li {
            width: 150px;
            float: none;
            display: list-item;
            position: relative;

        }

        nav ul ul ul li {
            position: relative;
            top: -60px;
            left: 150px;

        }
    </style>
</body>

</html>