<?php
session_start();
if ($_SESSION['email']==true){
 
}else{
  header("location:cv.php");
}
  ?>




<!-- header -->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- icon -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- <database css> -->
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css">
    

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script src="//geodata.solutions/includes/countrystatecity.js"></script> -->


  </head>

   <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <!-- <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><?php echo $_SESSION['email'];?></a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="job_post.php">Sign out</a>
        </li>
      </ul>
    </nav>






<!-- sidebar -->
<?php
$conn=mysqli_connect("localhost","root","","abc_jobs");
$query=mysqli_query($conn,"select * from cv");

?>

<div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
  </ol>
</nav>

              </li>
              <li class="nav-item">
                <a class="nav-link active" href="jobseeker_dashboard.php">
                  <span data-feather="home"></span>
                  Dashboard<span class="sr-only">(current)</span>
                </a>
              </li>
              </li>
            </ul>
            </ul>
          </div>
        </nav>

<?php
?>




        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="jobseeker_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="cv.php">CV</a></li>
    <li class="breadcrumb-item"><a href="create_cv.php">Edit CV</a></li>
  </ol>
</nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit CV</h1>
            
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
            </div>
          </div>
          <div style="width: 50%; margin-left: 20%; background-color: #F2F4F4;">
           
            <form action="" method="post" style="margin: 3%; padding: 3%;" name="create_cv" id="create_cv">
             <div id="msg"></div>
              <label for="personal">[Personal Info(s)]</label>
              <div class="form-group">
                <label for="father_name">Father's name</label>
                <input type="text" name="father_name" id="father_name" class="form-control" placeholder="Enter father(s) name">
              </div>
              <div class="form-group">
                <label for="father_mobile">Father's mobile</label>
                <input type="text" name="father_mobile" id="father_mobile" class="form-control" placeholder="Enter father(s) mobile">
              </div>

              <div class="form-group">
                <label for="mother_name">Mother's name</label>
                <input type="text" name="mother_name" id="mother_name" class="form-control" placeholder="Enter mother(s) name">
              </div>
              <div class="form-group">
                <label for="mother_mobile">Mother's mobile</label>
                <input type="text" name="mother_mobile" id="mother_mobile" class="form-control" placeholder="Enter mother(s) mobile">               
              </div>
                <div class="form-group">
                  <label for="nationality">Nationality</label>
                  <select name="nationality" name="nationality" class="form-control" id="nationality">
                  <option value= "bangladeshi" >Bangladeshi</option>
                  <option value="american">American</option>
                  <option value="australian">Australian</option>
                </select>
              </div>
                <div class="form-group">
                  <label for="gender">Gender</label>
                  <select name="gender" name="gender" class="form-control" id="gender">
                  <option value= "male" >Male</option>
                  <option value="female">Female</option>
                </select>
              </div>





              <div class="form-group">
                <label for="personal">[Academic(s)]</label>
              </div>

              <label for="personal">Secondary</label>
              <div class="form-group">
                <label for="sec_id">Student ID</label>
                <input type="text" name="sec_id" id="sec_id" class="form-control" placeholder="Enter Student ID">
              </div>
              <div class="form-group">
                <label for="sec_institute">Institute</label>
                <input type="text" name="sec_institute" id="sec_institute" class="form-control" placeholder="Enter Institute">
              </div>
                <div class="form-group">
                  <label for="sec_curriculum">Curriculum</label>
                  <select name="sec_curriculum" name="sec_curriculum" class="form-control" id="sec_curriculum">
                  <option value="bangla medium">Bangla Medium</option>
                  <option value="english medium">English Medium</option>
                  <option value="english version">English Version</option>
                </select>
              </div>
                <div class="form-group">
                  <label for="sec_major">Major</label>
                  <select name="sec_major" name="sec_major" class="form-control" id="sec_major">
                  <option value="science">Science</option>
                  <option value="commerce">Commerce</option>
                  <option value="art">Arts</option>
                </select>
              </div>
                <div class="form-group">
                  <label for="sec_degree">Degree</label>
                  <select name="sec_degree" name="sec_degree" class="form-control" id="sec_degree">
                  <option value= "secondary">Secondary</option>
                </select>
              </div>
              <div class="form-group">
                <label for="sec_gpa">GPA</label>
                <input type="text" name="sec_gpa" id="sec_gpa" class="form-control" placeholder="Enter GPA">
              </div>
              <div class="form-group">
                <label for="sec_graduation_date">Graduation Date</label>
                <input type="date" name="sec_graduation_date" id="sec_graduation_date" class="form-control" placeholder="Enter Graduation Date 0000-00-00" required autofocus>
              </div>
              <div class="form-group">
                <label for="sec_starting_date">Starting Date</label>
                <input type="date" name="sec_starting_date" id="sec_starting_date" class="form-control" placeholder="Enter Starting Date 0000-00-00" required autofocus>
              </div>


              <label for="personal">Higher Secondary</label>
              <div class="form-group">
                <label for="h_id">Student ID</label>
                <input type="text" name="h_id" id="h_id" class="form-control" placeholder="Enter Student ID">
              </div>
              <div class="form-group">
                <label for="h_institute">Institute</label>
                <input type="text" name="h_institute" id="h_institute" class="form-control" placeholder="Enter Institute">
              </div>
                <div class="form-group">
                  <label for="h_curriculum">Curriculum</label>
                  <select name="h_curriculum" name="h_curriculum" class="form-control" id="h_curriculum">
                  <option value="bangla medium">Bangla Medium</option>
                  <option value="english medium">English Medium</option>
                  <option value="english version">English Version</option>
                </select>
              </div>
                <div class="form-group">
                  <label for="h_major">Major</label>
                  <select name="h_major" name="h_major" class="form-control" id="h_major">
                  <option value="science">Science</option>
                  <option value="commerce">Commerce</option>
                  <option value="art">Arts</option>
                </select>
              </div>
                <div class="form-group">
                  <label for="h_degree">Degree</label>
                  <select name="h_degree" name="h_degree" class="form-control" id="h_degree">
                  <option value= "higher secondary">Higher Secondary</option>
                </select>
              </div>
              <div class="form-group">
                <label for="h_gpa">GPA</label>
                <input type="text" name="h_gpa" id="h_gpa" class="form-control" placeholder="Enter GPA">
              </div>
              <div class="form-group">
                <label for="h_graduation_date">Graduation Date</label>
                <input type="text" name="h_graduation_date" id="h_graduation_date" class="form-control" placeholder="Enter Graduation Date 0000-00-00">
              </div>
              <div class="form-group">
                <label for="h_starting_date">Starting Date</label>
                <input type="text" name="h_starting_date" id="h_starting_date" class="form-control" placeholder="Enter Starting Date 0000-00-00">
              </div>





                <div class="form-group">
                <input type="submit" class="btn btn-block btn-success" placeholder="Save" name="submit" id="submit">               
              </div>
              

            
          </div>

<!-- <?php

include('connection/db.php');
  if (isset($_POST['submit'])){
    $email=$_SESSION['email'];
    $father_name=$_POST['father_name'];
    $father_mobile=$_POST['father_mobile'];
    $mother_name=$_POST['mother_name'];
    $mother_mobile=$_POST['mother_mobile'];
    $nationality=$_POST['nationality'];
    $gender=$_POST['gender'];

    $sec_id=$_POST['sec_id'];
    $sec_institute=$_POST['sec_institute'];
    $sec_curriculum=$_POST['sec_curriculum'];
    $sec_major=$_POST['sec_major'];
    $sec_degree=$_POST['sec_degree'];
    $sec_gpa=$_POST['sec_gpa'];
    $sec_graduation_date=$_POST['sec_graduation_date'];
    $sec_starting_date=$_POST['sec_starting_date'];

    $h_id=$_POST['h_id'];
    $h_institute=$_POST['h_institute'];
    $h_curriculum=$_POST['h_curriculum'];
    $h_major=$_POST['h_major'];
    $h_degree=$_POST['h_degree'];
    $h_gpa=$_POST['h_gpa'];
    $h_graduation_date=$_POST['h_graduation_date'];
    $h_starting_date=$_POST['h_starting_date'];



 $query=mysqli_query($conn,"insert into cv(email, father_name, father_mobile, mother_name, mother_mobile, nationality, gender, sec_id, sec_institute, sec_curriculum, sec_major, sec_degree, sec_gpa, sec_graduation_date, sec_starting_date,h_id, h_institute, h_curriculum, h_major, h_degree, h_gpa, h_graduation_date, h_starting_date)values('$email', '$father_name','$father_mobile','$mother_name','$mother_mobile','$nationality','$gender','$sec_id','$sec_institute','$sec_curriculum','$sec_major','$sec_degree','$sec_gpa','$sec_graduation_date','$sec_starting_date','$h_id','$h_institute','$h_curriculum','$h_major','$h_degree','$h_gpa','$h_graduation_date','$h_starting_date')");

var_dump($query);
 if ($query){
  echo "Data has been successfully inserted";
  // header('location:jobseeker_dashboard.php');
 }else{
  echo "Some error! Please try again";
 }

}
?> -->







<?php

include('connection/db.php');
  if (isset($_POST['submit'])){
    $email=$_SESSION['email'];
    $father_name=$_POST['father_name'];
    $father_mobile=$_POST['father_mobile'];
    $mother_name=$_POST['mother_name'];
    $mother_mobile=$_POST['mother_mobile'];
    $nationality=$_POST['nationality'];
    $gender=$_POST['gender'];

    $sec_id=$_POST['sec_id'];
    $sec_institute=$_POST['sec_institute'];
    $sec_curriculum=$_POST['sec_curriculum'];
    $sec_major=$_POST['sec_major'];
    $sec_degree=$_POST['sec_degree'];
    $sec_gpa=$_POST['sec_gpa'];
    $sec_graduation_date=$_POST['sec_graduation_date'];
    $sec_starting_date=$_POST['sec_starting_date'];

    $h_id=$_POST['h_id'];
    $h_institute=$_POST['h_institute'];
    $h_curriculum=$_POST['h_curriculum'];
    $h_major=$_POST['h_major'];
    $h_degree=$_POST['h_degree'];
    $h_gpa=$_POST['h_gpa'];
    $h_graduation_date=$_POST['h_graduation_date'];
    $h_starting_date=$_POST['h_starting_date'];



 $query=mysqli_query($conn,"insert into cv(email, father_name, father_mobile, mother_name, mother_mobile, nationality, gender, sec_id, sec_institute, sec_curriculum, sec_major, sec_degree, sec_gpa, sec_graduation_date, sec_starting_date,h_id, h_institute, h_curriculum, h_major, h_degree, h_gpa, h_graduation_date, h_starting_date)values('$email', '$father_name','$father_mobile','$mother_name','$mother_mobile','$nationality','$gender','$sec_id','$sec_institute','$sec_curriculum','$sec_major','$sec_degree','$sec_gpa','$sec_graduation_date','$sec_starting_date','$h_id','$h_institute','$h_curriculum','$h_major','$h_degree','$h_gpa','$h_graduation_date','$h_starting_date')");

var_dump($query);
 if ($query){
  echo "Data has been successfully inserted";
  // header('location:jobseeker_dashboard.php');
 }else{
  echo "Some error! Please try again";
 }

}
?>