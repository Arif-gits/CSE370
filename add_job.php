<?php
session_start();
if ($_SESSION['email']==true){

}else{
  header("location:job_post.php");
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
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="job_provider_signout.php">Sign out</a>
        </li>
      </ul>
    </nav>



          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Create a job</h1>
            
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">

              </div>
            </div>
          </div>
          <div style="width: 50%; margin-left: 20%; background-color: #F2F4F4;">
           
            <form action="" method="post" style="margin: 3%; padding: 3%;" name="create_cv" id="create_cv">
             <div id="msg"></div>


              <div class="form-group">
                <label for="job_title">Job Title</label>
                <input type="text" name="job_title" id="job_title" class="form-control" placeholder="Enter job title">
              </div>

                <div class="form-group">
                  <label for="job_type">Job Type</label>
                  <select type='text' name="job_type" class="form-control" id="job_type" placeholder='job_type'>
                  <option value= "software_eng" >Software Engineer</option>
                  <option value="software_dev">Software Developer</option>
                  <option value= "data_sci" >Data Scientist</option>
                  <option value="sys_analyst">System Analyst</option>
                  <option value= "network_eng" >Network Engineer</option>

                  <option value="electrical_eng">Electrical Engineer</option>
                  <option value= "electronics_eng" >Electronics Engineer</option>
                  <option value= "power_eng" >Power Engineer</option>

                  <option value="architect">Architect</option>
                  <option value= "urban_des" >Urban Designer</option>
                  <option value="interior_des">Interior Designer</option>

                  <option value= "marketing_manager" >Marketing Manager</option>
                  <option value="finance_manager">Finance Manager</option>
                  <option value= "opt_manager" >Operations Manager</option>

                  <option value="pharmacist">Pharmacist</option>
                  <option value= "clinical_pharm" >Clinical Pharmacist</option>
                  <option value="hospital_pharm">Hospital Pharmacist</option>
                </select>
              </div>

              <div class="form-group">
                <label for="des">Description</label>
                <input type="text" name="des" id="des" class="form-control" placeholder="Enter description">
              </div>
              <div class="form-group">
                <label for="country">Country</label>
                <input type="text" name="country" id="country" class="form-control" placeholder="Enter Country">
              </div>
              <div class="form-group">
                <label for="state">State</label>
                <input type="text" name="state" id="state" class="form-control" placeholder="Enter State">
              </div>
              <div class="form-group">
                <label for="city">City</label>
                <input type="text" name="city" id="city" class="form-control" placeholder="Enter city">
              </div>

                <div class="form-group">
                  <label for="category">Category</label>
                  <select type='text' name="category" class="form-control" id="category" placeholder='category'>
                    <option value="">Category</option>
                    <option value="full time">Full Time</option>
                    <option value="part time">Part Time</option>
                    <option value="internship">Internship</option>
                </select>
              </div>
              <div class="form-group">
                <label for="keyword">Keyword</label>
                <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Enter keyword">
              </div>
              <div class="form-group">
                <label for="salary_range">Salary Range</label>
                  <select type='text' name="salary_range" class="form-control" id="salary_range" placeholder='Enter Salary Range'>
                    <option value="<10,000">Salary Range: <10,000</option>
                    <option value="10,000-20,000">Salary Range: 10,000-20,000</option>
                    <option value="20,000-30,000">Salary Range: 20,000-30,000</option>
                    <option value="30,000-40,000">Salary Range: 30,000-40,000</option>
                    <option value="40,000-50,000">Salary Range: 40,000-50,000</option>
                    <option value="50,000-60,000">Salary Range: 50,000-60,000</option>
                    <option value="60,000-70,000">Salary Range: 60,000-70,000</option>
                    <option value="70,000-80,000">Salary Range: 70,000-80,000</option>
                    <option value="80,000-90,000">Salary Range: 80,000-90,000</option>
                    <option value="90,000-1,00,000">Salary Range: 90,000-1,00,000</option>
                    <option value="1,00,000>">Salary Range: 1,00,000></option>
                </div>
              <div class="form-group">
                <label for="deadline">Deadline</label>
                <input type="date" name="deadline" id="deadline" class="form-control" placeholder="Enter deadline">
              </div>

             <input type="submit" class="btn btn-lg btn-primary btn-block" name="submit" id="submit" placeholder ="submit">
          </form>
  </body>
</html>




<?php
include('connection/db.php');
if (isset($_POST['submit'])) {
  $email=$_SESSION['email'];
  $job_title=$_POST['job_title'];
  $job_type=$_POST['job_type'];
  $des=$_POST['des'];
  $country=$_POST['country'];
  $state=$_POST['state'];
  $city=$_POST['city'];
  $category=$_POST['category'];
  $keyword=$_POST['keyword'];
  $salary_range=$_POST['salary_range'];


 $query=mysqli_query($conn,"insert into all_jobs(email,job_title,job_type,des,country,state,city,category,keyword,salary_range)values('$email','$job_title','$job_type','$des','$country','$state','$city','$category','$keyword','$salary_range')");
var_dump($query);
 if ($query){
 	echo "Data has been successfully inserted";
    header('location:jobs.php');
 }else{
 	echo "Some error! Please try again";
 }
}
?>