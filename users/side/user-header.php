<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>user page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-4 pt-5">

                <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(../assets/uploads/img/<?php echo $_SESSION['user_image']; ?>);"></a>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <!-- <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a> -->
                        <!-- <ul class="collapse list-unstyled" id="homeSubmenu"> -->
                        <!-- <li>
                    <a href="#">Home 1</a>
                </li>
                <li>
                    <a href="#">Home 2</a>
                </li>
                 <li>
                        <a href="#">Home 3</a>
                    </li>
               
                         </ul> 

                    </li>-->
                   
                    <li>
                        <a href="../academia/index.php">Home</a>
                    </li>
                    <li>
                        <a href="../academia/about.php">About</a>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <!-- <li>
                    <a href="#">Page 1</a>
                </li>
                <li>
                    <a href="#">Page 2</a>
                </li>
                <li>
                    <a href="#">Page 3</a>
                </li> -->
                        </ul>
                    </li>
                    <!-- <li>
              <a href="#">Portfolio</a>
	          </li> -->
                    <li>
                        <a href="../academia/contact.php">Contact</a>
                    </li>
                </ul>

                <div class="footer">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <!-- Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This Website was made <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Tripple A Developers</a> -->
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>

            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="../academia/index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../academia/about.php">About</a>
                            </li>
                            <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="../academia/contact.php">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>