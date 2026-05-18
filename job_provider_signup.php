<!-- jobprovider_signup -->



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css\sign_in.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="job_provider_signup.php" method="post">
      <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Dear Company</h1>
      <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>

      <label for="inputEmail" class="sr-only">Company Registration Number</label>
      <input type="reg" name="reg" id="reg" class="form-control" placeholder="Company Registration Number" required autofocus>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputEmail" class="sr-only">Company Name</label>
      <input type="company_name" id="company_name" name="company_name" class="form-control" placeholder="Enter Your Company Name" required autofocus>

      <label for="inputEmail" class="sr-only">Mobile Number</label>
      <input type="Number" id="mobile_number" name="mobile_number" class="form-control" placeholder="Enter the mobile number" required autofocus>

      <label for="inputEmail" class="sr-only">Office Address</label>
      <input type="text" id="office_address" name="office_address" class="form-control" placeholder="Enter the Office Address" required autofocus>

      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Enter Password" required>



      <input type="submit" class="btn btn-lg btn-primary btn-block" name="submit" value="sign up">

      <!-- <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button> -->
      <a href="new-post.php">Already have an account?</a>
    </form>
  </body>
</html>



<?php

include('connection/db.php');
if (isset($_POST['submit'])){

  $reg=$_POST['reg'];
  $email = $_POST['email'];
  $company_name=$_POST['company_name'];
  $mobile_number=$_POST['mobile_number'];
  $office_address=$_POST['office_address'];
  $password=$_POST['password'];

  $query = mysqli_query($conn, "SELECT * FROM job_provider WHERE email='$email' OR mobile_number = '$mobile_number' OR reg = '$reg'");

  if (mysqli_num_rows($query) > 0) {
    echo "<script>alert('There is already a user with that Email or Mobile number or Company Registration Number!')</script>";
  } else {
    // Insert user into database logic here
            $query=mysqli_query($conn,"insert into job_provider(reg,email,company_name,mobile_number,office_address,password)values('$reg','$email','$company_name','$mobile_number','$office_address','$password')");
        var_dump($query);
        if($query){
            echo "<script>alert('Now You Can Login!')</script>";
            header('location:new-post.php');
        }else{
            echo "<script>alert('Some Error! Please Try Again')</script>";
          }
  }
}
?>