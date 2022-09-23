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
              <h1>Hello, <?php echo $_SESSION['first_name'];?>&nbsp;<span>Welcome Here</span></h1>
            </div>
          </div>
        </div>
        
        <!-- /# column -->
      </div>
      <!-- /# row -->
      <section id="main-content">
        <div class="row">
          <!-- card code -->

          <?php
          $select_pro = "SELECT * FROM program JOIN image ON program.pro_id = image.pro_id
                JOIN faculty ON faculty.fac_id = program.fac_id GROUP BY image.img_id ORDER BY faculty.fac_name";
          $exe = mysqli_query($conn, $select_pro);
          while ($row = mysqli_fetch_assoc($exe)) {
            $pro_id = $row['pro_id']; ?>

            <a href="./show_course_unit.php?pro_id=<?php echo $row['pro_id'] ?>&pro_name=<?php echo $row['pro_name'] ?>" class="col-lg-3">
              <div class="card nestable-cart" style="height: 230px;">
                <small class="text-warning" style="font-style: italic;"><?php echo $row['fac_name']; ?></small>
                <div class="card-title">
                  <img src="./assets/uploads/img/<?php echo trim($row['img_name']); ?>" alt="img" width="100%" height="120px">

                </div>
                <!-- <div class="card-text" style=" font-weight: 900;"> -->
                  <large class="text-dark"><?php echo $row['pro_name']; ?></large>
                  <!-- <h5 class="my-2"></h5> -->
                <!-- </div> -->
              </div>
            </a>
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