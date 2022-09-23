<?php

use function PHPSTORM_META\type;

// session_start();
// if(!isset($_SESSION['id']))header('Location: ../index.php');
include('../admin/includes/header.php');

?>


<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Upload program images</h1>
                        </div>
                       
                    </div>
                </div>

                <!-- /# column -->
            </div>
            <!-- /# row -->
            <section id="main-content">

                <!-- /# add faculty form -->
                <form class="form-horizontal" action="./partials/__upload_images.php" enctype="multipart/form-data" method="POST">
                    <div class="form-group has-success">
                        <div>
                            <?php
                            // messege
                            $messege = $_GET['mess'];

                            if (strpos($messege, 'Successfully')) { ?>
                                <div class="ml-2 text-success ">Inserted successfully</div>
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
                                <label>Select program</label>
                                <select class="form-control" name="pro_name">
                                    <!-- GET ALL FACULTY -->
                                    <?php
                                    $select_pro = "SELECT * FROM program ORDER BY pro_name";
                                    $exe = mysqli_query($conn, $select_pro);
                                    while($row = mysqli_fetch_assoc($exe)){
                                        $pro_id = $row['pro_id'];?>
    
                                        <option> <?php echo $row['pro_name'];?></option>
                                        <?php
                                    }

                                    ?>
                                
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <input type="file" class="form-control h6" name="image" placeholder="Add duration of the program"><br>
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