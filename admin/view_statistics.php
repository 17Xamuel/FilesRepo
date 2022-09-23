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

      </div>
      <div class="statistics 2">
        <div class="users">

          <?php
          $sql = "SELECT * FROM paper";
          $query = mysqli_query($conn, $sql);
          $paper_count = mysqli_num_rows($query);

          $sql = "SELECT * FROM users";
          $query = mysqli_query($conn, $sql);
          $user_count = mysqli_num_rows($query);

          $sql = "SELECT * FROM faculty";
          $query = mysqli_query($conn, $sql);
          $faculty_count = mysqli_num_rows($query);


          $sql = "SELECT * FROM program";
          $query = mysqli_query($conn, $sql);
          $program_count = mysqli_num_rows($query);


          $sql = "SELECT * FROM course_unit";
          $query = mysqli_query($conn, $sql);
          $cu_count = mysqli_num_rows($query);
          ?>



          </tbody>
          </table>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;
      </div>

      <canvas id="myChart" style="width:100%;max-width:600px"></canvas><br><br><br>
      <canvas id="mybar" style="width:100%;max-width:600px"></canvas><br><br><br>

      <div class="statistics 2">
        <div class="users">

          <?php
          $sql = "SELECT * FROM `users` WHERE type = 'user' ORDER BY first_name";
          $query = mysqli_query($conn, $sql);
          $numberOfRows = mysqli_num_rows($query);
          $num = 0;
          while ($num <= $numberOfRows) {
            $num++;
          }
          ?>
          <P>Total Number of users&nbsp;<span>(<?php echo $numberOfRows; ?>)</span></P>
          <?php
          if (mysqli_num_rows($query) > 0) {
          ?>
            <table class="styled-table" style="border-color: #96D4D4;">
              <thead>
                <tr>
                  <th>ID</th>
                  <th style="text-align:justify;">First Name</th>
                  <th style="text-align:justify;">Last Name</th>
                  <th style="text-align:justify;">Registration Number</th>
                  <th style="text-align:justify;">Students Number</th>
                  <th style="text-align:justify;">email</th>
                  <th style="text-align:justify;">Phone Number</th>
                </tr>
              </thead>
              <?php
              $num = 0;
              while ($row = mysqli_fetch_assoc($query)) {
                $num++;
                // echo $num;
                $user_id = $row['user_id'];
                $first_name = $row['first_name'];
                $last_name = $row['last_name'];
                $reg_no = $row['reg_no'];
                $stud_no = $row['stud_no'];
                $email = $row['email'];
                $phone = $row['phone'];
              ?>
                <tbody>
                  <tr>
                    <td><?php
                        echo $num;
                        ?></td>
                    <td style="text-align: justify;"><?php echo $first_name ?></td>
                    <td style="text-align: justify;"><?php echo $last_name ?></td>
                    <td style="text-align: justify;"><?php echo $reg_no ?></td>
                    <td style="text-align: justify;"><?php echo $stud_no ?></td>
                    <td style="text-align: justify;"><?php echo $email ?></td>
                    <td style="text-align: justify;"><?php echo $phone ?></td>
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
      <button onclick="print()" class="btn btn-success">print the document</button>
    </div>
  </div>
</div>
<script>

</script>

<?php
include('../superadmin/includes/footer.php');

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>



<script>
  var xValues = ["Papers", "Users", "Faculties", "Programs", "Course Units"];
  var yValues = [<?php echo $paper_count . "," . $user_count . "," .  $faculty_count . "," . $program_count . "," . $cu_count; ?>];
  var barColors = [
    "#b91d47",
    "#00aba9",
    "#2b5797",
    "#e8c3b9",
    "#1e7145"
  ];

  new Chart("myChart", {
    type: "pie",
    data: {
      labels: xValues,
      datasets: [{
        backgroundColor: barColors,
        data: yValues
      }]
    },
    options: {
      title: {
        display: true,
        text: "System Utilization Status"
      }
    }
  });
</script>

<script>
  var xValues = ["Papers", "Users", "Faculties", "Programs", "Course Units"];
  var yValues = [<?php echo $paper_count . "," . $user_count . "," .  $faculty_count . "," . $program_count . "," . $cu_count; ?>];
  var barColors = ["red", "green", "blue", "orange", "brown"];

  new Chart("mybar", {
    type: "bar",
    data: {
      labels: xValues,
      datasets: [{
        backgroundColor: barColors,
        data: yValues
      }]
    },
    options: {
      legend: {
        display: false
      },
      title: {
        display: true,
        text: "System Resource Utilization Status"
      }
    }
  });
</script>