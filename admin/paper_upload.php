<?php

// use function PHPSTORM_META\type;

// session_start();
// if(!isset($_SESSION['id']))header('Location:../index.php');
include('../admin/includes/header.php');

?>


<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div>
                    <a style="margin-top: 10%; float:right;" class="btn btn-warning" href="home.php">PREVIOUS</a>
                </div>
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <!-- <div class="page-header">
                        <div class="page-title">
                            <h1>upload here</h1>
                        </div>
                    </div> -->
                </div>

                <!-- /# column -->
            </div>
            <!-- /# row -->
            <section id="main-content">

                <!-- /# add faculty form -->
                <form class="form-horizontal" action="./partials/__paper_upload.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group has-success">
                        <div>
                            <?php
                            // messege
                            $messege = $_GET['mess'];

                            if (strpos($messege, 'Successfully')) { ?>
                                <div class="ml-2 text-danger ">Paper uploaded successfully</div>
                            <?php

                            } else { ?>
                                <div class="ml-2 text-success ">
                                    <?php
                                    echo $messege;
                                    ?>
                                </div>
                        </div>

                    <?php } ?>

                    </div>
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="form-group">
                                <label>Select Course Unit</label>
                                <select class="form-control" name="cu_name">
                                    <!-- GET ALL COURSE UNITS -->
                                    <?php
                                    $select_cu = "SELECT * FROM course_unit ORDER BY cu_name";
                                    $exe = mysqli_query($conn, $select_cu);
                                    while ($row = mysqli_fetch_assoc($exe)) { ?>

                                        <option> <?php echo $row['cu_name']; ?></option>
                                    <?php
                                    }

                                    ?>

                                </select>
                            </div>
                            <div class="form-group my-1">
                                <label>Select year of study</label>
                                <select class="form-control " name="yr_name">
                                    <!-- GET ALL YEARS -->
                                    <?php
                                    $select_yr = "SELECT * FROM year_of_study ORDER BY yr_name";
                                    $exe = mysqli_query($conn, $select_yr);
                                    while ($row = mysqli_fetch_assoc($exe)) { ?>

                                        <option> <?php echo $row['yr_name']; ?></option>
                                    <?php
                                    }

                                    ?>

                                </select>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <input type="file" name="myfile"> <br><br>
                            <input type="text" class="form-control" name="description" placeholder="Paper Description" required><br>
                            <label>Select document category</label>
                            <select class="form-control" name="pap_type">

                                <option>End Of Semester Exam</option>
                                <option>Test</option>
                                <option> Project Report</option>
                                <option>Research Proposal</option>
                                <option>Concept Paper</option>
                            </select><br>
                            <input type="hidden" value="1" name="approve">


                            <input class="btn btn-success btn-sm" type='submit' name='save'>
                        </div>
                    </div>
        </div>
        </form>
        </section>
    </div>
</div>
</div>


<?php
include('../admin/includes/footer.php');
?>