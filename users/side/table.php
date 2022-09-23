<?php
include('../../admin/partials/__connection.php');
// if(!isset($_SESSION['id']))header('Location: ../../index.php');
include('user-header.php');



if (isset($_GET['cu_id']) && $_GET['cu_name']) {
    $cu_id  = $_GET['cu_id'];
    $cu_name = $_GET['cu_name'];
} else {

    die();
}

?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - Pricing table </title> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<!-- <link rel="stylesheet" href="./style.css"> -->
<!-- 
</head>

<body> -->
<!-- partial:index.partial.html -->
<div class="wrap" id="grid">
    <?php
    include('../../admin/partials/__connection.php');
    $sql = "SELECT * FROM paper p  LEFT JOIN course_unit c ON p.cu_id=c.cu_id 
        LEFT JOIN year_of_study Y ON p.yr_id=y.yr_id WHERE  cu_name = '$cu_name' AND approve = '1'";
    $qry = mysqli_query($conn, $sql);
    if (mysqli_num_rows($qry) > 0) {

        while ($result = mysqli_fetch_array($qry)) { ?>

            <div class="table">





                <ul>


                    <li>
                        <div class="top purple white">
                            <h1 style="color: yellow;"><?php echo $result['pap_type']; ?></h1>&nbsp;
                            <p><?php echo $result['description']; ?></p>
                            <!-- <div class="circle pink">$49</div> -->
                        </div>
                        <div class="bottom">

                            <p><img src="../../admin/assets/uploads/papers/<?php if ($result['doc_category'] === 'image') {

                                                                                echo $result['pap_name'];
                                                                            } elseif ($result['doc_category'] === 'pdf') {
                                                                                echo 'pd.png';
                                                                            } elseif ($result['doc_category'] === 'word') {
                                                                                echo 'word.png';
                                                                            } elseif ($result['doc_category'] === 'powerpoint') {
                                                                                echo 'ppt.png';
                                                                            } elseif ($result['doc_category'] === 'zipped') {
                                                                                echo 'zip.jpg';
                                                                            }

                                                                            ?>" alt="img" height="100px" width="100px" class="t-img"></p>

                            <p><span><?php echo $result['cu_name']; ?></span></p>

                            <p><span><?php echo $result['yr_name']; ?></span></p>
                            <div class="sign">
                                <?php
                                if ($result['doc_category'] === 'image') { ?>
                                    <a href='./view_image.php?pap_name=<?php echo $result['pap_name']; ?>' class="button purple" style="color:white;">View Image</a>
                                <?php

                                } elseif ($result['doc_category'] === 'pdf') { ?>
                                    <a target="_blank" class="button purple" style="color:white;" href="http://localhost/academic/admin/assets/uploads/papers/<?php echo $result['pap_name']; ?>">VIEW PDF</a>
                                <?php
                                } elseif ($result['doc_category'] === 'word') { ?>
                                    <a target="_blank" class="button purple" style="color:white;" href="http://localhost/academic/admin/assets/uploads/papers/<?php echo $result['pap_name']; ?>">DOWNLOAD</a>
                                <?php
                                } elseif ($result['doc_category'] === 'powerpoint') { ?>
                                    <a target="_blank" class="button purple" style="color:white;" href="http://localhost/academic/admin/assets/uploads/papers/<?php echo $result['pap_name']; ?>">DOWNLOAD</a>
                                <?php
                                } elseif ($result['doc_category'] === 'zipped') { ?>
                                    <a target="_blank" class="button purple" style="color:white;" href="http://localhost/academic/admin/assets/uploads/papers/<?php echo $result['pap_name']; ?>">DOWNLOAD</a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </li>


                </ul>

            </div>
        <?php
        }
    } else { ?>
        <center>
            <h2 class="text-warning"> There is No Document Yet Uploaded Here</h2>
        </center>

        <!-- <h1 style=" color: blue;">There is No Document Yet Uploaded Here</h1> -->

    <?php
    }
    ?>
</div>
<div class="flow">
    <!-- <a class="btn btn-primary" href="./show_course_units.php">BACK</a> -->

</div>


<style>
    @import url(https://fonts.googleapis.com/css?family=Droid+Sans:400,700|Droid+Serif:400,700);

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html,
    body {
        text-align: center;
        background-color: lightgray;
        /* *zoom: 1;
            filter: progid:DXImageTransform.Microsoft.gradient(gradientType=0, startColorstr='#FF5D4660', endColorstr='#FFF7EEC7');
            background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzVkNDY2MCIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI2Y3ZWVjNyIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
            background-size: 100%;
            background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #5d4660), color-stop(100%, #f7eec7));
            background-image: -moz-linear-gradient(top, #5d4660 0%, #f7eec7 100%);
            background-image: -webkit-linear-gradient(top, #5d4660 0%, #f7eec7 100%);
            background-image: linear-gradient(to bottom, #5d4660 0%, #f7eec7 100%); */
        font-family: 'Droid Sans', sans-serif;
    }

    .wrap {
        width: 800px;
        margin: 0 auto;
        text-align: left;
        color: #989A8F;
        gap: 5px !important;
    }

    #grid {
        display: grid;
        grid-template-columns: 25% 25% 25% 4fr;
    }

    .table {
        background-color: #ffffff !important;
        height: 300px;
        align-items: center;
        width: 100%;
        margin-top: 50px;
    }


    ul li {
        float: left;
        width: 199px;
        text-align: center;
        border-left: 1px solid #DDDCD8;
    }

    .top {
        background-color: #EAE9E4;
        height: 75px;
    }

    .top h1 {
        padding-top: 10px;
    }



    .bottom {
        margin-top: 10px;
    }

    .bottom p {
        font-size: 13px;
        font-family: 'Droid Serif', sans-serif;
        padding: 5px;
    }

    .bottom p span {
        font-weight: bold;
    }

    .sign {
        margin-top: 20px;
    }

    .sign .button {
        border: 1px solid #989A8F;
        padding: 10px 40px;
        -webkit-border-radius: 6px;
        -moz-border-radius: 6px;
        border-radius: 6px;
        color: #989A8F;
        font-size: 14px;
        text-decoration: none;
        vertical-align: middle;
        font-size: 14px;
    }

    .purple {
        background-color: #5D4660;
    }

    .white {
        color: #FFFFFF;
    }

    .pink {
        background-color: #BC9B94;
    }
</style>
<!-- partial -->


<?php
include('user-footer.php');
?>

<!-- </body>

</html> -->