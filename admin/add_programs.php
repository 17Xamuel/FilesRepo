<?php

use function PHPSTORM_META\type;

// session_start();
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
                            <h1>Add Program</h1>
                        </div>
                        <div class="page-title" class="text-info" style="width: 150%; position:relative">
                            <a class="text-warning" style="position: absolute; right:30px" href="upload_images.php?mess=">Upload Program images</a>
                        </div>
                    </div>
                </div>

                <!-- /# column -->
            </div>
            <!-- /# row -->
            <section id="main-content">

                <!-- /# add faculty form -->
                <form class="form-horizontal" action="./partials/__add_programs.php" method="POST">
                    <div class="form-group has-success">
                        <div>
                            <?php
                            // messege
                            $messege = $_GET['mess'];

                            if (strpos($messege, 'Successfully')) { ?>
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
                                <label>Select faculty</label>
                                <select class="form-control" name="faculty_name">
                                    <!-- GET ALL FACULTY -->
                                    <?php
                                    $select_fac = "SELECT * FROM faculty ORDER BY fac_name";
                                    $exe = mysqli_query($conn, $select_fac);
                                    while ($row = mysqli_fetch_assoc($exe)) {
                                        $fac_id = $row['fac_id']; ?>

                                        <option> <?php echo $row['fac_name']; ?></option>
                                    <?php
                                    }

                                    ?>

                                </select>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control h6" name="program_name" placeholder="Add program"><br>
                            <input type="number" max='7' min='1' class="form-control h6" name="program_duration" placeholder="Add duration of the program"><br>
                            <input class="btn btn-success btn-sm" type='submit'>
                        </div>
                    </div>
        </div>
        </form>
        </section>
    </div>
</div>



<?php
include('../admin/includes/footer.php');
?>