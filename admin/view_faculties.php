<?php
include('./partials/__connection.php');
// if(!isset($_SESSION['id']))header('Location:../index.php');
include('../admin/includes/header.php');
?>


<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                  
                </div>
                <style>

                </style>
                <!-- /# column -->
            </div>
            <!-- /# row -->
            <!-- 

        default admin dashboard for super admin

echoing  the number of num rows
       -->
       <div class="statistics" style="display:flex;">
        <div>

          <?php
          $sql = "SELECT * FROM `faculty` ORDER BY fac_name";
          $query = mysqli_query($conn, $sql);
          $numberOfRows = mysqli_num_rows($query);
          $num = 0;
          while ($num <= $numberOfRows) {
            $num++;
          }
          ?>
          <P>Total Number of Faculties&nbsp;<span>(<?php echo $numberOfRows; ?>)</span></P>
          <?php
          if (mysqli_num_rows($query) > 0) {
          ?>
            <table class="styled-table" style="border-color: #96D4D4;">
              <thead>
                <tr>
                  <th>ID</th>
                  <th style="text-align:justify;">FACULTIES</th>
                </tr>
              </thead>
              <?php
              $num2 = 0;
              while ($row = mysqli_fetch_assoc($query)) {
                $num2++;
                $fac_id = $row['fac_id'];
                $fac_name = $row['fac_name'];
              ?>
                <tbody>
                  <tr>
                    <td><?php
                        echo $num2;
                        ?></td>
                    <td style="text-align: justify;"><?php echo $fac_name ?></td>
                  </tr>
                <?php
              }
                ?>
                </tbody>
            </table>
          <?php
          } else {
            echo "No records matching your query were found.";
          }


          // $numberOfRows = mysqli_num_rows($connStatus);

          // echo $numberOfRows;
          // //this echo out the total number of rows returned from the query
          // $conn->close();
          ?>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="tab 11" style="float: right;">

          <?php
          $sql = "SELECT * FROM program p LEFT JOIN faculty f ON p.fac_id = f.fac_id ORDER BY fac_name";
          $query = mysqli_query($conn, $sql);
          $numberOfRows = mysqli_num_rows($query);
          // $num1 = 0;
          while ($num <= $numberOfRows) {
            // $num1++;
          }
          ?>
          <P>Total Number of Programs&nbsp;<span>(<?php echo $numberOfRows; ?>)</span></P>
          <?php
          if (mysqli_num_rows($query) > 0) {
          ?>
            <table class="styled-table" style="border-color: #96D4D4;">
              <thead>
                <tr>
                  <th>ID</th>
                  <th style="text-align:justify;">PROGRAM</th>
                  <th>FACULTY</th>
                </tr>
              </thead>
              <?php
              $num1 =0;
              while ($row = mysqli_fetch_assoc($query)) {
                $num1++;
                $pro_id = $row['pro_id'];
                $pro_name = $row['pro_name'];
                $fac_name = $row['fac_name'];
              ?>
                <tbody>
                  <tr>
                    <td><?php
                        echo $num1;
                        ?></td>
                    <td style="text-align: justify;"><?php echo $pro_name ?></td>
                    <td style="text-align: justify;"><?php echo $fac_name ?></td>
                  </tr>
                <?php
              }
                ?>
                </tbody>
            </table>
          <?php
          } else {
            echo "No records matching your query were found.";
          }


          // $numberOfRows = mysqli_num_rows($connStatus);

          // echo $numberOfRows;
          // //this echo out the total number of rows returned from the query
          // $conn->close();
          ?>
        </div>

      </div>
          
            <style>
                .styled-table {
                    border-collapse: collapse;
                    margin: 25px 0;
                    font-size: 0.9em;
                    font-family: sans-serif;
                    min-width: 400px;
                    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
                }

                .styled-table thead tr {
                    background-color: #009879;
                    color: #ffffff;
                    text-align: left;
                }

                .styled-table th,
                .styled-table td {
                    padding: 12px 15px;
                }

                .styled-table tbody tr {
                    border-bottom: 1px solid #dddddd;
                }

                .styled-table tbody tr:nth-of-type(even) {
                    background-color: #f3f3f3;
                }

                .styled-table tbody tr:last-of-type {
                    border-bottom: 2px solid #009879;
                }

                /* .styled-table tbody tr.active-row {
          font-weight: bold;
          color: #009879;
        } */
            </style>

        </div>
    </div>
</div>

<?php
include('../superadmin/includes/footer.php');

?>