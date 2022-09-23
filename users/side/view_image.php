<?php
// if(!isset($_SESSION['id']))header('Location: ../../index.php');
include('user-header.php');

if (isset($_GET['pap_name'])) {
    $pap_name = $_GET['pap_name'];
    $api = file_get_contents('http://127.0.0.1:8000/'.$pap_name);
   
   

} else {
}
?>

<style>
    #large_image {
        height: 100vh;
        width: 60vw;
    }
</style>

<div class="main container">
    <div class="text-image">    
        <?php
 echo $api;
        ?>    
    </div>
    <div class="hard-image">
       <img src="http://localhost/academic/admin/assets/uploads/papers/<?php echo $pap_name;?>" alt="img" height="900px" width="700px"> <?php echo $pap_name; ?>
    </div>
</div>

 <div>
   
</div>

<?php
include('user-footer.php');
?>