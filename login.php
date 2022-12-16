<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  
include 'partials/_dbconnect.php';
$username = $_POST["username"];
$password = $_POST["password"];
// $cpassword = $_POST["cpassword"];
// $exists = false;
// if(($password == $cpassword) && $exists == false){
  // $sql = "SELECT * from hamarlog where username = '$username' AND password = '$password' ";

  $sql = "SELECT * from hamarlog where username = '$username'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if($num == 1){
    while($row= mysqli_fetch_assoc($result)){
      if (password_verify($password, $row['password'])) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: welcome.php");
      }
      else{
        $showError = "Invalid Credentials";
    }
    }
    // $login = true;
  }
  // }
  else{
    $showError = "Invalid Credentials";
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    <!-- // Always create user database with some different name other than simply keeping it user -->
    
    <?php
    if($login){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Sucess!</strong> You are logged in.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
    if($showError){
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Failed!</strong> '. $showError .'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
    ?>

    <div class="container-md">

    <h1 class="text-center">Login to our website.</h1>
    <form action="/loginsys/login.php" method="post">
  <div class="mb-3 col-md-6">
    <!-- Server always find from name not from id -->
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
  </div>
  <div class="mb-3 col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" >
  </div>
  <!-- <div class="mb-3 col-md-6">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
    <div id="emailHelp" class="form-text">Make sure to type the same password.</div>

  </div> -->
  
  <button type="submit" class="btn btn-primary">Login</button>
</form>

    </div>



    
























    





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->
   
  </body>
</html>