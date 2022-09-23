<?php
// session_start();
// if(!isset($_SESSION['id']))header('Location: ../index.php');
include('./partials/__connection.php');
include('../admin/includes/header.php');


if (isset($_POST['delete'])) {
    $fac_id = $_POST['fac_id'];
    echo  $fac_id;

    $sql = "DELETE FROM faculty WHERE fac_id = $fac_id";
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
                            <h1>Delete Faculty</h1>
                        </div>

                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>Faculty</th>
                            <th>Deleting</th>
                            <th>Editing</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM faculty";
                            $qry = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($qry) > 0) {
                                $num = 0;
                                while ($row = mysqli_fetch_array($qry)) {
                                    $num++;
                                    $fac_id = $row['fac_id'];

                            ?>
                                    <tr>
                                        <td><?php echo $num; ?></td>
                                        <td><?php echo $row['fac_name'] ?></td>
                                        <td>
                                            <form method="POST">
                                                <input type="hidden" value='<?php echo $fac_id ?>' name='fac_id'>
                                                <button class="btn btn-danger" name='delete' type='submit'>DELETE</button>

                                            </form>
                                        </td>
                                        <td>
                                            <a class="btn btn-success" href="./edit_faculty.php?faculty=<?php echo $fac_id; ?>">Edit Faculty</a>
                                        </td>
                                    </tr>
                            <?php


                                }
                            }

                            ?>


                        </tbody>
                    </table>
                    <style>
                        table {
                            border-spacing: 15px;
                        }
                    </style>
                </div>


            </div>


        </div>
    </div>
</div>


<?php
include('../admin/includes/footer.php');
?>