<?php
// session_start();
// if(!isset($_SESSION['id']))header('Location: ../index.php');
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
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Add Course UnitS</h1>
                        </div>
                    </div>
                </div>

                <!-- /# column -->
            </div>
            <!-- /# row -->
            <section id="main-content">

                <!-- /# add faculty form -->
                <form class="form-horizontal" action="./partials/__add_course_unit.php" method="POST">
                    <div class="form-group has-success">
                        <div>
                            <?php
                            // messege
                            $messege = $_GET['mess'];

                            if (strpos($messege, 'successfully')) { ?>
                                <div class="ml-2 text-success ">Inserted successfully</div>
                            <?php

                            } else { ?>
                                <div class="ml-2 text-danger ">
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
                                <label>Select Faculty</label>
                                <select class="form-control" name="faculty_name">
                                    <!-- GET ALL FACULTY -->
                                    <?php
                                    $select_fac = "SELECT * FROM faculty ORDER BY fac_name";
                                    $exe = mysqli_query($conn, $select_fac);
                                    while ($row = mysqli_fetch_assoc($exe)) { ?>

                                        <option> <?php echo $row['fac_name']; ?></option>
                                    <?php
                                    }

                                    ?>

                                </select>
                            </div>
                            <div class="form-group my-1">
                                <label>Select Program</label>
                                <select class="form-control " name="program_name">
                                    <!-- GET ALL PROGRAMs -->
                                    <?php
                                    $select_pro = "SELECT * FROM program ORDER BY pro_name";
                                    $exe = mysqli_query($conn, $select_pro);
                                    while ($row = mysqli_fetch_assoc($exe)) { ?>

                                        <option> <?php echo $row['pro_name']; ?></option>
                                    <?php
                                    }

                                    ?>

                                </select>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control h6 my-3" name="course_unit1" placeholder="Add Course Unit 1">
                            <input type="text" class="form-control h6 my-3" name="course_unit2" placeholder="Add Course Unit 2">
                            <input type="text" class="form-control h6 my-3" name="course_unit3" placeholder="Add Course Unit 3">
                            <input type="text" class="form-control h6 my-3" name="course_unit4" placeholder="Add Course Unit 4">
                            <input type="text" class="form-control h6 my-1" name="course_unit5" placeholder="Add Course Unit 5">
                            <input class="btn btn-success btn-sm my-3" type='submit'>
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