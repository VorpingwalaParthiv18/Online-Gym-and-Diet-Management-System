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
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <title>signup</title>
</head>

<body>
  <?php
  require "partial/_nav_bar.php";
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
    <h1 class="text-center">Sign Up to our website</h1>
    <form action="/LOGIN_SYSTEM/signup.php" method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" maxlength="11" class="form-control" id="username" name="username" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" maxlength="23" class="form-control" id="password" name="password">
      </div>
      <div class="form-group">
        <label for="cpassword">Confirm Password</label>
        <input type="password" maxlength="23" class="form-control" id="cpassword" name="cpassword">
        <small id="emailHelp" class="form-text text-muted">Make sure to type the same passowrd</small>

      </div>

      <button type="submit" class="btn btn-primary col-md-6">Submit</button>
    </form>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>