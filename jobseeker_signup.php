<?php
session_start();
if ($_SESSION['email']==true){
 
}else{
  header("location:job_post.php");
}
  ?>


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
    <form class="form-signin" action="jobseeker_signup.php" method="post">
      <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Dear Jobseeker</h1>
      <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

      <label for="inputEmail" class="sr-only">First Name</label>
      <input type="first_name" name="first_name" id="first_name" class="form-control" placeholder="Enter Your First Name" required autofocus>

      <label for="inputEmail" class="sr-only">Last Name</label>
      <input type="last_name" name="last_name" id="last_name" class="form-control" placeholder="Enter Your Last Name" required autofocus>

      <label for="inputEmail" class="sr-only">Mobile Number</label>
      <input type="Number" id="mobile_number" name="mobile_number" class="form-control" placeholder="Enter Your mobile_number" required autofocus>

       <label for="inputEmail" class="sr-only">Date of Birth</label>
      <input type="date" id="dob" name="dob" class="form-control" placeholder="Enter Your Date of Birth" required autofocus>


      <input type="submit" class="btn btn-lg btn-primary btn-block" name="submit" id="submit" placeholder ="sign up">

      <!-- <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button> -->
      <a href="job_post.php">Already have an account?</a>
    </form>
  </body>
</html>



<?php

include('connection/db.php');
if (isset($_POST['submit'])){

  $email=$_SESSION['email'];
  $password=$_POST['password'];
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];  
  $mobile_number=$_POST['mobile_number'];
  $dob=$_POST['dob'];

 
  $query = mysqli_query($conn, "SELECT * FROM jobseeker WHERE email='$email' OR mobile_number = '$mobile_number'");

  if (mysqli_num_rows($query) > 0) {
    echo "<script>alert('There is already a user with that Email or Mobile number!')</script>";
  } else {
      // Insert user into database logic here
            $query=mysqli_query($conn,"insert into jobseeker(email,password,first_name,last_name,mobile_number,dob)values('$email','$password','$first_name','$last_name','$mobile_number','$dob')");
              
            $query=mysqli_query($conn,"insert into cv(email, id, father_name, father_mobile, mother_name, mother_mobile, nationality, gender, current_address, permanent_address, sec_id, sec_institute, sec_curriculum, sec_major, sec_degree, sec_gpa, sec_graduation_date, sec_starting_date,h_id, h_institute, h_curriculum, h_major, h_degree, h_gpa, h_graduation_date, h_starting_date, u_id, u_institute, u_major, u_minor, u_degree, u_cgpa, u_starting_date, u_graduation_date)values('$email', '', '','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");

            var_dump($query);
            if($query){
                echo "<script>alert('Now You Can Login!')</script>";
                header('location:job_post.php');
            }else{
                echo "<script>alert('Some Error! Please Try Again')</script>";
              }
  }

}
?>