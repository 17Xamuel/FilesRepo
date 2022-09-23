<?php

use function PHPSTORM_META\type;

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
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Add Faculty</h1>
                        </div>
                    </div>
                </div>

                <!-- /# column -->
            </div>
            <!-- /# row -->
            <section id="main-content">

                <!-- /# add faculty form -->
                <form class="form-horizontal" action="./partials/__add_faculty.php" method="POST">
                    <div class="form-group has-success">
                        <div>
                            <?php
                            // messege
                            $messege = $_GET['mess'];

                            if ($messege == 'Inserted successfully') { ?>
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
                            <input type="text" class="form-control" name="fac_name"><br>
                            <input class="btn btn-success btn-sm" type='submit'>
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