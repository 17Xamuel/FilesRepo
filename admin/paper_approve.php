<?php
include('./partials/__connection.php');
// if(!isset($_SESSION['id']))header('Location:../index.php');
// $cu_id = $_GET['cu_id'];
// $cu_name = $_GET['cu_name'];

// $yr_id = $_GET['yr_id'];
// $yr_name = $_GET['yr_name'];
include('../admin/includes/header.php');

?>
?>




<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                  
                </div>
            </div>





            <div class="container data">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Documents Approval Status</h3>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    
                                    <th>Doc Name</th>
                                    <th>Paper Description</th>
                                    <th>Doc Type</th>
                                    <th>Course Unit</th>
                                    <th>Year</th>
                                    <th>Approve status</th>
                                    <th></th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $sql =    "SELECT * FROM paper p LEFT JOIN course_unit c ON p.cu_id=c.cu_id LEFT JOIN year_of_study Y ON p.yr_id=y.yr_id";

                                // $sql = "SELECT * FROM paper WHERE approve = '0'";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        $pap_id = $row['pap_id'];


                                        //getting cu name



                                        echo "<tr>";
                                        // echo "<th ='row'>" . $row['user_id'] . "</th>";
                                        echo "<td>" . $row['pap_name'] . "</td>";
                                        echo "<td>" . $row['description'] . "</td>";
                                        echo "<td>" . $row['pap_type'] . "</td>";
                                        echo "<td>" . $row['cu_name'] . "</td>";
                                        echo "<td>" . $row['yr_name'] . "</td>";
                                        // echo "<td>" . $row['approve'] . "</td>";

                                        if ($row['approve'] == 1) {
                                            echo "<td>" .
                                                '<button class = "btn btn-success"><a href = "./partials/__paper_approve.php?pap_id='
                                                . $row['pap_id'] . '&approve=0" style = " text-decoration: none; color: white;">Approved</a></button>' . "</td>";
                                        } else {
                                            echo "<td>" .
                                                '<button class= "btn btn-primary"><a href = "./partials/__paper_approve.php?pap_id='
                                                . $row['pap_id'] . '&approve=1" style = " text-decoration: none; color: white;">Approve</p></button>';
                                        }
                                        "</td>";

                                        echo "</tr>";
                                        // }
                                    }
                                } else {
                                    echo "No document available";
                                }
                                ?>

                            </tbody> 
                        </table>
                    </div>
                </div>
            </div>










            <?php
            include('../admin/includes/footer.php');
            ?>