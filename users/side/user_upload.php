<?php

include('../../admin/partials/__connection.php');
// if(!isset($_SESSION['id']))header('Location: ../../index.php');

// $pro_id = $_GET['pro_id'];
// $pro_name = $_GET['pro_name'];
include('user-header.php');


?>


<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h3>upload here</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- //form -->
            <form class="form-horizontal" action="../partials/__user_upload.php" method="POST" enctype="multipart/form-data">
                <div class="form-group has-success">
                    <div>
                        <?php
                        // messege
                        if (isset($_GET['mess'])) {
                            $messege = $_GET['mess'];
                        ?>
                            <div class="ml-2 text-success "><?php echo $messege ?></div>
                        <?php

                        } elseif (isset($_GET['mes'])) {
                            $messa = $_GET['mes'];
                        ?>
                            <div class="ml-2 text-success "><?php echo $messa ?></div>
                        <?php


                        }

                        ?>


                    </div>

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
                    <div class="col-sm-9"><br>
                        <input type="file" name="myfile"> <br><br>
                        <input type="text" class="form-control" name="description" placeholder="Paper Description" required><br><br>
                        <label>Select document category</label>
                        <select class="form-control" name="pap_type">
                            <option>End Of Semester Exam</option>
                            <option>Test</option>
                            <option> Project Report</option>
                            <option>Research Proposal</option>
                            <option>Concept Paper</option>
                        </select><br>
                        <input type="hidden" name="approve" value="0">

                        <input class="btn btn-success btn-sm" type='submit' name='save'><br><br>
                    </div>
                </div>
            </form>
            <div class="flow" style="float: right;">
                <!-- <a class="btn btn-primary" href="../side/show_course_units.php">BACK</a> -->

            </div>
        </div>

        <!-- //form -->



        <?php
        include('user-footer.php');
        ?>