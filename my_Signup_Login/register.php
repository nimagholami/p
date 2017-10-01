<?php
//print_r($_POST);
require_once('connect.php');
$connection = mysqli_connect('localhost','root','','demo');
if(isset($_POST['username']) && !empty($_POST['username'])
 && isset($_POST['email']) && !empty($_POST['email'])
 && isset($_POST['password']) && !empty($_POST['password'])){

    echo '<br>';
    echo $username = $_POST['username'];echo '<br>';
    echo $email = $_POST['email'];echo '<br>';
    echo $password = $_POST['password'];echo '<br>';

    $sql = "INSERT INTO `users` VALUES('4','$username','$password','$email')";

    if (mysqli_query($connection, $sql)){
        echo "successful";
    }else{
        echo "Failed";
    }
}
?>

<html dir="rtl" lang="ir-fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ورود یا ثبت نام">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>signup</title>
    <!--font-awesome-->
    <link rel="stylesheet" href="styles/font-awesome.min-v.4.7.css">
    <!--bootstrap.min-v4.0.0.css-->
    <link rel="stylesheet" href="styles/bootstrap.min-v4.0.0.css">
    <!--custom styles-->
    <link rel="stylesheet" href="styles/register_styles.css">
    <!-- =======================================================
        Bootstrap 4.0.0
        Theme Name: Login & Signup
        Author: Nima Gholami
        Author Email: nima_gholami@alumni.ut.ac.ir
    ======================================================= -->
</head>
<body>
<div class="container">
    <div class="row">
        <form class="col" method="post" >
            <fieldset class="form-group">
                <legend>Signup</legend>
                <div class="form-group">
                    <label class="form-control-label mb-1 sr-only" for="inputusername">Username</label>
                    <input class="form-control input" type="text" name="username"  id="idusername" placeholder="Username" required>
                </div><!--form-group-->
                <div class="form-group">
                    <label class="form-control-label mb-1 sr-only" for="inputemail">Email</label>
                    <input class="form-control input" type="email" name="email" id="idemail" placeholder="Email" required>
                </div><!--form-group-->
                <div class="form-group">
                    <label class="form-control-label mb-1 sr-only" for="inputpassword">Password</label>
                    <input class="form-control input " type="password" name="password" id="idpassword" placeholder="Password" required>
                </div><!--form-group-->
            </fieldset><!--form-group-->
            <button class="btn btn-success form-control" type="submit" >Submit</button>
            <div class="line"></div>
        </form>
    </div><!--row-->
</div><!--container-->
<script src="scripts/jquery-3.2.1.min.js"></script>
<script src="scripts/bootstrap.min-v4.0.0.js"></script>
</body>
</html>