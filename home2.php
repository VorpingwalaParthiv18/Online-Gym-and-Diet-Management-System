<?php
$login = false;
$showerror=false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'partial/_dbconnect.php';
  $username = $_POST["username"];
  $password = $_POST["password"];
  // $sql="Select * from users where username='$username' AND password='$password'";
  $sql="Select * from users where username='$username'";
  $result=mysqli_query($conn,$sql);
  $num=mysqli_num_rows($result);

    if($num == 1){
      while($row=mysqli_fetch_assoc($result)){
        if(password_verify($password,$row['password'])){//first user input password,and second is database password
          $login=true;
          session_start();
          $_SESSION['loggedin']=true;
          $_SESSION['username']=$username;
          header("location:welcome.php");
        }

        else{
          $showerror="Invalid Credenials";
        }
      }
  }
  else{
    $showerror="Invalid Credenials";
  }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <!-- <script defer src="login.js"></script> -->
</head>
<body>
  <?php
  // require "partial/_nav_bar.php";
  ?>
  <?php
  if($login)
  {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> You are logged in.
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
    <form id="form" action="home2.php" method="post">
        <i><h1> Login Page</h1></i>
        <div class="input-control">
            <i><b><label for="username">Username</label></b></i>
            <input id="username" name="username" type="text" placeholder="enter your username">
            <!-- <div class="error"></div> -->
        </div>
        <div class="input-control">
            <i><b><label for="password">Password</label></b></i>
            <input id="password"name="password" type="password" placeholder="enter your password">
            <!-- <div class="error"></div> -->
        </div>
        <i><b>If don't have account ?</b> <a href="signup.php">Sign-up</a></i>
        <button type="submit">Login</button>
    <i><b>Forgot Password</b> <a href="change-password.html">click here</a></i>
    </form>
</div>
</body>
</html>
  