<?php
include('./partials/__connection.php');
 include('../admin/includes/header.php');
// code for editing a faculty
$cid = $_GET['course'];
?>


<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Edit Course Unit</h1>
                        </div>
                        <!-- <div class="page-title" class="text-info" style="width: 150%; position:relative">
                            <a class="text-warning" style="position: absolute; right:30px" href="upload_images.php?mess=">Upload Program images</a>
                        </div> -->
                    </div>
                </div>

                <!-- /# column -->
            </div>
            <!-- /# row -->
            <section id="main-content">

                <!-- /# add faculty form -->
                <form class="form-horizontal" action = "./partials/__edit_faculty.php?cu=<?php echo $cid ?>" method="POST">
                    <?php
                    $sql = "SELECT * FROM course_unit WHERE  cu_id= '$cid'";
                    $query = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($query) > 0) {
                        while ($row = mysqli_fetch_array($query)) {
                            $cu_name = $row['cu_name'];
                            echo "<div class='row'>";
                            echo " <div class='col-sm-9'>";
                            echo "<input type='text' class='form-control h6' name='cu_name' value= '$cu_name' placeholder='Edit Course Unit'>";
                            echo " </div>";
                            echo "</div>";


                            echo " <div class='col-sm-9'>";
                            echo "<button type='submit' class='btn btn-success' name='course'>" . "Edit Course Unit" . "</button>";
                            echo " </div>";
                        }
                    }
                    ?>


                </form>

            </section>
        </div>
    </div>
</div>

<?php
include('../admin/includes/footer.php');

?>