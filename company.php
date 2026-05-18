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
            <h1 class="h2">Company Details</h1>
            
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">

              </div>
            </div>
          </div>
          <div style="width: 50%; margin-left: 20%; background-color: #F2F4F4;">
           
            <form action="" method="post" style="margin: 3%; padding: 3%;" name="company_details" id="company_details">
             <div id="msg"></div>


                <div class="form-group">
                  <label for="company_type">Company Type</label>
                  <select type='text' name="company_type" class="form-control" id="company_type" placeholder='company_type'>
                  <option value= "priv_company" >Private Company</option>
                  <option value="public_company">Public Companies.</option>
                </select>
              </div>

              <div class="form-group">
                <label for="about">About</label>
                <input type="text" name="about" id="about" class="form-control" placeholder="Enter company description">
              </div>
              <div class="form-group">
                <label for="vision">Company's Vision Statement</label>
                <input type="text" name="vision" id="vision" class="form-control" placeholder="Enter company's vision statement">
              </div>
              <div class="form-group">
                <label for="company_his">Company History</label>
                <input type="text" name="company_his" id="company_his" class="form-control" placeholder="Enter company's history">
              </div>


             <input type="submit" class="btn btn-lg btn-primary btn-block" name="submit" id="submit" placeholder ="submit">
          </form>
  </body>
</html>




<?php
include('connection/db.php');
if (isset($_POST['submit'])) {
  $company_type=$_POST['company_type'];
  $about=$_POST['about'];
  $vision=$_POST['vision'];
  $company_his=$_POST['company_his'];


 $query=mysqli_query($conn,"insert into company(company_type,about,vision,company_his)values('$company_type','$about','$vision','$company_his')");
var_dump($query);
 if ($query){
 	echo "Data has been successfully inserted";
  // header('location:jobs.php');
 }else{
 	echo "Some error! Please try again";
 }
}
?>