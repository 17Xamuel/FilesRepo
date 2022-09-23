<?php

include('../admin/includes/header.php');

?>


<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Add Super Admin</h1>
                        </div>
                    </div>
                </div>

                <!-- /# column -->
            </div>
            <!-- /# row -->
            <section id="main-content">

                <!-- /# add faculty form -->
                <form class="form-horizontal" action="../admin/partials/__register.php" method="POST">
                    <div class="form-group has-success">
                        <div>
                            <?php
                            // messege
                            $messege = $_GET['mess'];

                            if ($messege == 'Regestered successfully') { ?>
                                <div class="">
                                    <script type="text/javascript" class="w3-panel w3-pale-green w3-border text-danger">
                                        alert("Registered Successfully")
                                    </script>
                                    <!-- <div class="ml-2 text-success ">Registered successfully</div> -->
                                </div>
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
                            <input type="text" class="form-control" name="first_name" required placeholder="First Name"> <br>
                            <input type="text" class="form-control" name="last_name" required placeholder="Last Name"> <br>
                            <input type="text" class="form-control" name="reg_no" required placeholder="Registration Number"> <br>
                            <input type="number" class="form-control" name="stud_no" required placeholder="Students Number"> <br>
                            <input type="password" class="form-control" name="password" required placeholder="Password"> <br>
                            <input type="email" class="form-control" name="email" required placeholder="@Email"> <br>
                            <input type="number" class="form-control" name="phone" required placeholder="Phone Number"> <br>
                            <input type="hidden" name="type" value="super admin"> 
                            <!-- <input type="hidden" name="pro_id" value="">  -->
                            <input type="hidden" value="1" name="approval">
                            <input type="hidden" value="user.png" name="user_image">


                            <input class=" btn-primary btn-sm" type='submit'>
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