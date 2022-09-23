<?php
// if(!isset($_SESSION['id']))header('Location:../index.php');
include('../admin/includes/header.php');


include('partials/__download_file.php');

?>


<table>
    <thead>
        <th>ID</th>
        <th>Filename</th>
      <th>Paper type</th>
        <th>Downloads</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php foreach ($files as $file) : ?>
            <tr>
                <td><?php echo $file['pap_id']; ?></td>
                <td><?php echo $file['pap_name']; ?></td>
                <td><?php echo $file['pap_type']; ?></td>          
              
                <td><a href="downloads.php?pap_id=<?php echo $file['pap_id'] ?>">Download</a></td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>


<?php
include('../admin/includes/footer.php');


?>