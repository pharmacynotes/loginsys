<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true) {
  header("location: index.php");
  exit;
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

    <title>Welcome - <?php $_SESSION['username'] ?></title>
  </head>
  <body>
  <?php require 'partials/_nav.php' ?>

    <!-- Welcome - <?php echo $_SESSION['username'] ?> -->


    <div class="container my-3">
      <div class="alert alert-success">
        <h4 class="alert-heading text-uppercase">Welcome - <?php echo $_SESSION['username'] ?>!</h4>
        <p>Hey how are you doing? Welcome to iSecure. You are logged in as <strong class="text-capitalize"> <?php echo $_SESSION['username'] ?> 
        </strong>. Aww yeah, you successfully read this important alert message.
      </p> <hr>
      <p class="mb-0">
        Whenever you need to, be sure to logout <a href="/loginsys/logout.php">using this link.</a>
      </p>
      </div>
      <div class="container my-2 col-12 block">
        <a class="text-decoration-none  " href="https://pharmacynotes.github.io/Theory/RAVI%20SIR/Dental_products_chemistry.pdf">
        <button class="btn btn-warning fst-italic fw-bold" type="button">  
        DOWNLOAD PDF OF DENTAL PRODUCTS
      </button>
    </a>
      
        <a class="text-decoration-none  " href="https://pharmacynotes.github.io/2nd_sem/practical/p_aphe_pdf/p_aphe.pdf">
        <button class="btn btn-warning  fst-italic fw-bold" type="button">  
        DOWNLOAD PDF OF APHE PRACTICAL
      </button>
    </a>
      </div>
    </div>



<!-- https://pharmacynotes.github.io/2nd_sem/practical/p_aphe_pdf/p_aphe.pdf -->










    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>