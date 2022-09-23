<?php
// include('../admin/includes/header.php');
?>


<form action="./partials/__change_password.php" method="post">
    <h2>Change Password</h2>
    <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>

    <?php if (isset($_GET['success'])) { ?>
        <p class="success"><?php echo $_GET['success']; ?></p>
    <?php } ?>

    <label>Old Password</label>
    <input type="password" name="op" placeholder="Old Password">
    <br>

    <label>New Password</label>
    <input type="password" name="np" placeholder="New Password">
    <br>

    <label>Confirm New Password</label>
    <input type="password" name="c_np" placeholder="Confirm New Password">
    <br>

    <button type="submit">CHANGE</button>
    <a href="home.php" class="ca">HOME</a>
</form>






<style>
    body {
        background: #1690A7;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        flex-direction: column;
    }

    * {
        font-family: sans-serif;
        box-sizing: border-box;
    }

    form {
        width: 500px;
        border: 2px solid #ccc;
        padding: 30px;
        background: #fff;
        border-radius: 15px;
    }

    h2 {
        text-align: center;
        margin-bottom: 40px;
    }

    input {
        display: block;
        border: 2px solid #ccc;
        width: 95%;
        padding: 10px;
        margin: 10px auto;
        border-radius: 5px;
    }

    label {
        color: #888;
        font-size: 18px;
        padding: 10px;
    }

    button {
        float: right;
        background: #555;
        padding: 10px 15px;
        color: #fff;
        border-radius: 5px;
        margin-right: 10px;
        border: none;
    }

    button:hover {
        opacity: .7;
    }

    .error {
        background: #F2DEDE;
        color: #A94442;
        padding: 10px;
        width: 95%;
        border-radius: 5px;
        margin: 20px auto;
    }

    .success {
        background: #D4EDDA;
        color: #40754C;
        padding: 10px;
        width: 95%;
        border-radius: 5px;
        margin: 20px auto;
    }

    h1 {
        text-align: center;
        color: #fff;
    }

    .ca {
        font-size: 14px;
        display: inline-block;
        padding: 10px;
        text-decoration: none;
        color: #444;
    }

    .ca:hover {
        text-decoration: underline;
    }

    .home-nav a {
        padding: 10px;
        color: #f7bd65;
        text-transform: uppercase;
        text-decoration: none;
    }
</style>


<?php
// include('../admin/includes/footer.php');
?>