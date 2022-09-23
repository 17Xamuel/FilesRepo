<?php
include('./partials/__connection.php');
 include('../admin/includes/header.php');
// code for editing a faculty
$id = $_GET['faculty'];
?>


<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Edit Faculty</h1>
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
                <form class="form-horizontal" action = "./partials/__edit_faculty.php?fac=<?php echo $id ?>" method="POST">
                    <?php
                    $sql = "SELECT * FROM faculty WHERE  fac_id= '$id'";
                    $query = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($query) > 0) {
                        while ($row = mysqli_fetch_array($query)) {
                            $fac_name = $row['fac_name'];
                            echo "<div class='row'>";
                            echo " <div class='col-sm-9'>";
                            echo "<input type='text' class='form-control h6' name='fac_name' value= '$fac_name' placeholder='Edit Faculty'>";
                            echo " </div>";
                            echo "</div>";


                            echo " <div class='col-sm-9'>";
                            echo "<button type='submit' class='btn btn-success' name='submit'>" . "Edit Faculty" . "</button>";
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