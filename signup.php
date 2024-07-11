<?php
$showalert = false;
$showerror=false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'partial/_dbconnect.php';
  $username = $_POST["username"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  //Check whether this username exists
  $existSql = "SELECT * FROM `users` WHERE username='$username'";
  $result=mysqli_query($conn,$existSql);
  $numexistrow=mysqli_num_rows($result);
  if($numexistrow>0){
    // $exist=true;
    echo "Username already exist";  
  }
  else{
    $exist=false;
    if (($password == $cpassword) && $exist == false) {
      $hash=password_hash($password,PASSWORD_DEFAULT);
    $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ( '$username', '$hash', current_timestamp())";
    $result=mysqli_query($conn,$sql);
    if($result){
      $showalert=true;
      }
    }
    else{
      $showerror="Password do not match";
    }
    }
  }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="signup.css">
    <!-- <script defer src="signup.js"></script> -->
</head>
<body>
  <?php
  // require "partial/_nav_bar.php";
  ?>
  <?php
  if($showalert)
  {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> You should check in on some of those fields below.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>';
  }
  if($showerror)
  {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> '.$showerror.'
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>';
  }
  ?>
   <div class="container">
        <form id="form" action="/LOGIN_SYSTEM/signup.php" method="post">
            <i><h1>Sign-up Page</h1></i>
            <div class="input-control">
                <i><b><label for="username">Username</label></b></i>
                <input id="username" name="username" type="text" placeholder="enter your username">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <i><b><label for="email">Email</label></b></i>
                <input id="email" name="email" type="text" placeholder="enter your email">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <i><b><label for="password">Password</label></b></i>
                <input id="password"name="password" type="password" placeholder="enter your password">
                <div class="error"></div>
            </div>
            <div class="input-control">
            <i><b><label for="password2">Confirm Password</label></b></i>
                <input id="password2"name="cpassword" type="password" placeholder="confirm your password">
                <div class="error"></div>
            </div>
            <i><b>If already have an account?</b><a href="home2.php">Login</a></i>
            <button type="submit">Sign Up</button>
        <i><b>Forgot Password</b> <a href="otp.html">click here</a></i>
        </form>
    </div>
</body>
</html>