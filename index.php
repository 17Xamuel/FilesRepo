<!-- <a href="./register.php?mess=">reditrtgtdrf</a> -->
<?php
include('login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>academic repository</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/sty.css">
    
    <style>
        body,
        html {
        margin: 0;
        padding: 0;
        height: 100%;
        background: #60a3bc !important;
        }
        nav {
        background-color: #563d7c;
        color: #fff;
        padding: 30px 60px;
        display: flex;
        justify-content: space-between;
        }

        nav ul {
        display: flex;
        justify-content: space-around;
        align-items: center;
        list-style: none;
        }

        nav li a {
        text-decoration: none;
        color: #fff;
        font-weight: bold;
        padding: 5px 8px;
        }

        nav li a:hover {
        color: yellow;
        text-decoration: none;
        }

    </style>
</head>
<body>
   <nav class="navbar">
        <div class="container-fluid align-items-center">
            <h6 >                               
                <a href="#" style="color: rgb(166, 166, 202); text-decoration: none;">LIRA UNIVERSITY ACADEMIC REPOSITORY</a>        
            </h6>
            <div>
                <ul>
                <a href="javascript:void(0);" class="btn btn-primary" id="mpopupLink">LOGIN</a>&nbsp;&nbsp;&nbsp;
                <a href="./admin/sign_up.php?mess=" class="btn btn-primary">SIGN UP </a>
                </ul>
            </div>
        </div>
    </nav>

    <!--slider images-->
    <div class="container mt-1 mb-1">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/uploads/img/cover.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/uploads/img/gulucoaster.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/uploads/img/guluplan.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/uploads/img/muni1.jpg" alt="Fourth slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/uploads/img/muni.jpg" alt="Fifth slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/uploads/img/liraslider2.jpg" alt="Sixth slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/uploads/img/liraslider3.jpg" alt="Seventh slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <!--Jumbotron-->
    <div class="container mt-2">
        <div class="row jumbotron ">
            <div class="col">
                <p class="lead">
                    No more worries? An Online academic document repository system is here
                     to address the deadlock in the difficulty of accessing past academic 
                     documents. To mention a few, past papers, students reports, project proposals, research work so on so on.... 
                </p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <div style="margin-bottom: 10px; display: flex;justify-content: space-around;">
                    <div>
                        <a href="https://youtube.com/channel/UC8-lmzpg1X9hNXJc6V8FkWQ" target="_blank"
                            style="text-decoration: none;" class="btn btn-outline-primary">

                            <i class="fa fa-youtube"></i>&nbsp; Beacon TV

                        </a>
                    </div>
                    <div>
                        <a href="https://twitter.com/WeeklyCampus" target="_blank" style="text-decoration: none;"
                            class="btn btn-outline-primary">
                            <i class="fa fa-twitter-square"></i>
                            <span style="font-weight: bold;">&nbsp;On Twitter</span>
                        </a>
                    </div>
                </div>
                <div style="margin-bottom: 10px; display: flex;justify-content: space-around;">
                    <div>
                        <a href="https://www.facebook.com/campusweekly.fb" target="_blank"
                            style="text-decoration: none;" class="btn btn-outline-primary">
                            <i class="fa fa-facebook-square"></i>
                            <span style="font-weight: bold; font-size: 12px;">CampusWeekly</span>
                        </a>
                    </div>
                    <div>
                        <a href="https://www.instagram.com/campusweekly/" target="_blank" style="text-decoration: none;"
                            class="btn btn-outline-primary">
                            <i class="fa fa-instagram"></i>
                            <span style="font-weight: bold;">&nbsp; Instagram</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>


   
    <!-- footer -->
    <footer style="background-color: #563d7c">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row border-top pt-3" style="color: rgb(247, 252, 249);">
                        <div class="col-lg-6 text-center">
                            <ul class="list-inline">
                                <li class="list-inline-item mr-2">
                                    <a href="#" style="color: aliceblue;">Home</a>
                                </li>
                                <li class="list-inline-item mr-2">
                                    <a href="#" style="color: aliceblue;">About</a>
                                </li>
                                <li class="list-inline-item mr-2">
                                    <a href="#" style="color: aliceblue;">Contact</a>
                                </li>
                                <li class="list-inline-item mr-2">
                                    <a href="#" style="color: aliceblue;">TRACK</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 text-center">
                           <p >
                                Copyright &copy;
                                <script>document.write(new Date().getFullYear())</script>.
                                <span style="font-weight: bold;">Tripple A Developers</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer -->
  

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    
  
        
        <!-- Modal popup box -->
        <div id="mpopupBox" class="mpopup">
            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close">×</span>               
                </div>
                <div class="modal-body">
                    <div class="login">
                        <div class="login-triangle"></div>
                        
                        <h2 class="login-header">Log in</h2>
                      
                        <form class="login-container" action="" method="POST">
                          <p><input type="email" name="email" placeholder="Email"></p>
                          <p><input type="password" name="password" placeholder="Password"></p>
                          <input class="btn btn-primary btn-block" type="submit" value="Login" name="submit" >
                          <!-- <p><input type="submit" value="Log in"></p> -->
                        </form>
                      </div>
                    
                    
                      <style>
                        
                    
                    /* 'Open Sans' font from Google Fonts */
                    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);
                    
                    body {
                      background: #456;
                      font-family: 'Open Sans', sans-serif;
                    }
                    
                    .login {
                      width: 400px;
                      margin: 16px auto;
                      font-size: 16px;
                    }
                    
                    /* Reset top and bottom margins from certain elements */
                    .login-header,
                    .login p {
                      margin-top: 0;
                      margin-bottom: 0;
                    }
                    
                    /* The triangle form is achieved by a CSS hack */
                    .login-triangle {
                      width: 0;
                      margin-right: auto;
                      margin-left: auto;
                      border: 12px solid transparent;
                      border-bottom-color: #28d;
                    }
                    
                    .login-header {
                      background: #28d;
                      padding: 20px;
                      font-size: 1.4em;
                      font-weight: normal;
                      text-align: center;
                      text-transform: uppercase;
                      color: #fff;
                    }
                    
                    .login-container {
                      background: #ebebeb;
                      padding: 12px;
                    }
                    
                    /* Every row inside .login-container is defined with p tags */
                    .login p {
                      padding: 12px;
                    }
                    
                    .login input {
                      box-sizing: border-box;
                      display: block;
                      width: 100%;
                      border-width: 1px;
                      border-style: solid;
                      padding: 16px;
                      outline: 0;
                      font-family: inherit;
                      font-size: 0.95em;
                    }
                    
                    .login input[type="email"],
                    .login input[type="password"] {
                      background: #fff;
                      border-color: #bbb;
                      color: #555;
                    }
                    
                    /* Text fields' focus effect */
                    .login input[type="email"]:focus,
                    .login input[type="password"]:focus {
                      border-color: #888;
                    }
                    
                    .login input[type="submit"] {
                      background: #28d;
                      border-color: transparent;
                      color: #fff;
                      cursor: pointer;
                    }
                    
                    .login input[type="submit"]:hover {
                      background: #17c;
                    }
                    
                    /* Buttons' focus effect */
                    .login input[type="submit"]:focus {
                      border-color: #05a;
                    }
                      </style>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    
    
    
        <script>
            // Select modal
            var mpopup = document.getElementById('mpopupBox');
            
            // Select trigger link
            var mpLink = document.getElementById("mpopupLink");
            
            // Select close action element
            var close = document.getElementsByClassName("close")[0];
            
            // Open modal once the link is clicked
            mpLink.onclick = function() {
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
            </script>
</body>
</html>