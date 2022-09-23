<?php
// session_start();
// if(!isset($_SESSION['id']))header('Location: ../index.php');
include('./partials/__connection.php');
include('../admin/includes/header.php');


if (isset($_POST['delete'])) {
    $pap_id = $_POST['pap_id'];
    // echo  $pro_id;

    $sql = "DELETE FROM paper WHERE pap_id = $pap_id";
    $qry = mysqli_query($conn, $sql);
    if ($qry) {

        // header("location: delete_faculty.php");
    } else {
        echo "Failed to delete Faculty" . mysqli_error($conn);
    }
}
?>


<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div>
                    <a style="margin-top: 10%; float:right;" class="btn btn-warning" href="home.php">Back</a>
                </div>
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Delete A Document</h1>
                        </div>

                    </div>
                    <table class="table table-striped">
                        <thead style="align-content:space-around;">
                        <tr>
                            <th>ID</th>
                            <th>Document Name</th>
                            <th>Description</th>
                            <th>Document Type</th>
                            <th>Category</th>
                            <th>Course Unit</th>
                            <th>Year</th>

                            </tr>

                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM paper p LEFT JOIN course_unit c ON p.cu_id=c.cu_id LEFT JOIN year_of_study Y ON p.yr_id=y.yr_id";
                            $qry = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($qry) > 0) {
                                $num = 0;
                                while ($row = mysqli_fetch_array($qry)) {
                                    $num++;
                                    $pap_id = $row['pap_id'];

                            ?>
                                    <tr>
                                        <td><?php echo $num; ?></td>
                                        <td><?php echo $row['pap_name'] ?></td>
                                        <td><?php echo $row['description'] ?></td>
                                        <td><?php echo $row['pap_type'] ?></td>
                                        <td><?php echo $row['doc_category'] ?></td>
                                        <td><?php echo $row['cu_name'] ?></td>
                                        <td><?php echo $row['yr_name'] ?></td>
                                        <td>
                                            <form method="POST">
                                                <input type="hidden" value='<?php echo $pap_id ?>' name='pap_id'>
                                                <button class="btn btn-danger" name='delete' type='submit'>DELETE</button>

                                            </form>
                                        </td>
                                        <!-- <td>
                                            <a class="btn btn-success" href="./edit_course_unit.php?course=<?php echo $cu_id; ?>">Edit Course Unit</a>
                                        </td> -->
                                    </tr>
                            <?php


                                }
                            }

                            ?>


                        </tbody>
                    </table>
                </div>


            </div>


        </div>
    </div>
</div>


<?php
include('../admin/includes/footer.php');
?>