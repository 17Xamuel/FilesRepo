<?php
// if(!isset($_SESSION['id']))header('Location:../index.php');
include('../admin/includes/header.php');

//getting pro name and courseunit name
$pro_id = $_GET['pro_id'];
$pro_name = $_GET['pro_name'];

?>


<div class="content-wrap">
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div>
          <a style="margin-top: 10%; float:right;" class="btn btn-warning" href="home.php">PREVIOUS</a>
        </div>
        <div class="col-lg-8 p-r-0 title-margin-right">
          <div class="page-header">
            <div class="page-title">
              <h1><?php echo $pro_name; ?></h1>
            </div>
          </div>
        </div>
        <!-- /# column -->
        <div class="col-lg-4 p-l-0 title-margin-left">

        </div>
        <!-- /# column -->
      </div>
      <!-- /# row -->



      <section id="main-content">

        <div class="row">

          <?php

          $select_pro = "SELECT * FROM course_unit WHERE pro_id = '$pro_id;' ORDER BY cu_name";
          $exe = mysqli_query($conn, $select_pro);
          if (mysqli_num_rows($exe) > 0) {
            while ($row = mysqli_fetch_assoc($exe)) {
              $pro_id = $row['pro_id']; ?>
              <a href="./paper_upload.php?cu_id=<?php echo $row['cu_id']; ?>&cu_name=<?php echo $row['cu_name']; ?>&mess=">
                <div class="col-lg-3 shadow-sm m-4" style="background: #ADFF2F; height: 120px;">
                  <!-- <div class="card shadow-sm"> -->
                  <small class="text-primary" style="font-style: italic;"><?php echo $row['cu_name']; ?></small>
                  <!-- <div class="stat-widget-six"> -->
                  <div class="stat-content">
                    <h5 class="my-2"><?php echo $row['cu_name']; ?></h5>
                  </div>
                  <div>
                    <button type="button" class="btn btn-success active">Upload</button>
                  </div>
                  <!-- </div> -->
                  <!-- </div> -->
              </a>
        </div>

        <!-- card code -->
      <?php
            }
          } else { ?>
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

<?php
include('../admin/includes/footer.php');

?>