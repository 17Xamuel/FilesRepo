<!DOCTYPE html>
<html>

<head>
    <title>SIGN UP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form action="../admin/partials/__sign_up.php" method="POST">
        <div class="row">

            <div>
                <?php
                // messege
                $messege = $_GET['mess'];

                if ($messege == 'Inserted successfully') { ?>
                    <div class="ml-2 text-success ">Registered successfully</div>
                <?php

                } else { ?>
                    <div class="ml-2 text-danger ">
                        <?php
                        echo $messege;
                        ?>
                    </div>
            </div>

        <?php } ?>

        </div>
        <div class="col-sm-9">
            <input type="text" class="form-control" name="first_name" required placeholder="First Name"> <br>
            <input type="text" class="form-control" name="last_name" required placeholder="Last Name"> <br>
            <input type="text" class="form-control" name="reg_no" required placeholder="Registration Number"> <br>
            <input type="number" class="form-control" name="stud_no" required placeholder="Students Number"> <br>
            <input type="password" class="form-control" name="password" required placeholder="Password"> <br>
            <input type="email" class="form-control" name="email" required placeholder="@Email"> <br>
            <input type="number" class="form-control" name="phone" required placeholder="Phone Number"> 
            <input type="hidden" name="type" value="user"> 
            <input type="hidden" name="approval" value="0">
            <input type="hidden" name="user_image" value="user.png">
            <!-- <input type="hidden" name="pro_id" value=""> <br> -->

            <!-- <input class=" btn-primary btn-sm" type='submit'> -->

        </div>
        </div>


        <!-- <label>Email</label>
     	<input type="email" 
                 name="email" 
                 placeholder="Email Address"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br> -->

        <button type="submit">Sign Up</button>
        <a href=".././index.php" class="ca">Already have an account?</a>
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
            color: #88f;
            font-size: 18px;
            padding: 10px;
        }

        button {
            float: right;
            background: #1690A7;
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
</body>

</html>