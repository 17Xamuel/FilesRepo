<?php
// if(!isset($_SESSION['id']))header('Location: ../../index.php');
include('user-header.php');

include('../../admin/partials/__connection.php');
$pro_id = $_GET['pro_id'];
$pro_name = $_GET['pro_name'];

?>



<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
              <h1><?php echo $pro_name; ?></h1><br>
              <button class="btn btn-primary" style="float: left;">
                <a href="user_upload.php?mess= " style="text-decoration: none; color:white">Have Important Document Upload here</a>
              </button><br>
            </div>
          </div>
        </div>
      </div>


      <section id="main-content">

        <div class="row">

          <?php

          $select_pro = "SELECT * FROM course_unit WHERE pro_id = '$pro_id;' ORDER BY cu_name";
          $exe = mysqli_query($conn, $select_pro);
          if (mysqli_num_rows($exe) > 0) {
            while ($row = mysqli_fetch_assoc($exe)) {
              $cu_id = $row['cu_id'];

          ?>
              <!-- <a href="./table.php?cu_id =<?php echo  $row['cu_id'] ?>&cu_name =<?php echo $row['cu_name'] ?>"> -->
              <div class="col-lg-3 shadow-sm m-4" style="background: #ADFF2F; height: 120px;">
                <div class="stat-content">
                  <h5 class="my-2"><?php echo $row['cu_name']; ?></h5>
                </div>
                <div>
                  <small class="btn btn-success active">
                    <a style="text-decoration: none; color:white" href="table.php?cu_id=<?php echo $row['cu_id']; ?>&cu_name=<?php echo $row['cu_name']; ?>"> View Documents</a></small>
                </div>

                </a>
              </div>

              <!-- card code -->
            <?php
            }
          } else {
            ?>
            <center>
              <h2 class="text-warning"> There is No course unit yet Registered Here</h2>
            </center>
          <?php
          }

          ?>

          <!-- card code -->

        </div>

        <!-- /# main content -->
      </section>
    </div>
  </div>
</div>
<div class="flow">
  <a class="btn btn-primary" href="../academia/">BACK</a>

</div>



<?php
include('user-footer.php');
?>