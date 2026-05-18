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
      <!-- <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><?php echo $_SESSION['email'];?></a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="Jobseeker_signout.php">Sign out</a>
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
              <li class="nav-item">
                <a class="nav-link" href="cv.php">
                  <span data-feather="clipboard"></span>
                  CV
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="available_jobs.php">
                  <span data-feather="search"></span>
                  Available Jobs
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="applied_jobs.php">
                  <span data-feather="clipboard"></span>
                  Applied Jobs
                </a>
              </li>
            </ul>
            </ul>
          </div>
        </nav>

<?php
?>



<!-- cv view form -->
         <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="jobseeker_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="#">CV</a></li>
  </ol>
</nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">View CV</h1>
            
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">

                
              </div>

              <a class="btn btn-primary "href= "edit_cv.php">Edit CV</a>
            </div>
          </div>
          <table id="example" class="display" style="width:100%">

      <?php
        include("connection/db.php");



        $email = $_SESSION['email'];
        $query = mysqli_query($conn, "SELECT * FROM cv WHERE email = '$email'");
        


        while($row=mysqli_fetch_array($query)){
        ?>

            <tr>
            <ul>

              <label for="personal">[Personal Info(s)]</label>

              <li>Jobseeker ID: <?php echo $row["id"]; ?></li>
              <li>Email: <?php echo $row["email"]; ?></li>
              <li>Father's Name: <?php echo $row["father_name"]; ?></li>
              <li>Father's Mobile: <?php echo $row["father_mobile"]; ?></li>
              <li>Mother's Name: <?php echo $row["mother_name"]; ?></li>
              <li>Mother's mobile: <?php echo $row["mother_mobile"]; ?></li>
              <li>Nationality: <?php echo $row["nationality"]; ?></li>
              <li>Gender: <?php echo $row["gender"]; ?></li>
              <li>Current Address: <?php echo $row["current_address"]; ?></li>
              <li>Permanent Address: <?php echo $row["permanent_address"]; ?></li>



              <label for="personal">[Academic(s)]<br></label>

              <label for="personal">Secondary</label>

              <li>Student ID: <?php echo $row["sec_id"]; ?></li>
              <li>Institute: <?php echo $row["sec_institute"]; ?></li>
              <li>Curriculum: <?php echo $row["sec_curriculum"]; ?></li>
              <li>Major: <?php echo $row["sec_major"]; ?></li>
              <li>Degree: <?php echo $row["sec_degree"]; ?></li>
              <li>GPA: <?php echo $row["sec_gpa"]; ?></li>
              <li>Graduation Date: <?php echo $row["sec_graduation_date"]; ?></li>
              <li>Starting Date: <?php echo $row["sec_starting_date"]; ?></li>



              <label for="personal">Higher Secondary</label>

              <li>Student ID: <?php echo $row["h_id"]; ?></li>
              <li>Institute: <?php echo $row["h_institute"]; ?></li>
              <li>Curriculum: <?php echo $row["h_curriculum"]; ?></li>
              <li>Major: <?php echo $row["h_major"]; ?></li>
              <li>Degree: <?php echo $row["h_degree"]; ?></li>
              <li>GPA: <?php echo $row["h_gpa"]; ?></li>
              <li>Graduation Date: <?php echo $row["h_graduation_date"]; ?></li>
              <li>Starting Date: <?php echo $row["h_starting_date"]; ?></li>


              <label for="personal">Undergraduation Program</label>

              <li>Student ID: <?php echo $row["u_id"]; ?></li>
              <li>Institute: <?php echo $row["u_institute"]; ?></li>
              <li>Major: <?php echo $row["u_major"]; ?></li>
              <li>Minor: <?php echo $row["u_minor"]; ?></li>
              <li>Degree: <?php echo $row["u_degree"]; ?></li>
              <li>CGPA: <?php echo $row["u_cgpa"]; ?></li>
              <li>Starting Date: <?php echo $row["u_starting_date"]; ?></li>
              <li>Graduation Date: <?php echo $row["u_graduation_date"]; ?></li>
              




              </ul>
            </tr>
          <?php }?>
        </tbody>

    </table>

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

          
          <div class="table-responsive">
            
          </div>
        </main>
      </div>
    </div>

    
  </body>
</html>
?>