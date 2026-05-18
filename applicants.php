<?php
include('connection/db.php');
session_start();
if ($_SESSION['email']==true){
 
}else{
  header("location:new-post.php");
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
          <a class="nav-link" href="job_provider_signout.php">Sign out</a>
        </li>
      </ul>
    </nav>



<!-- sidebar -->
<?php
$conn=mysqli_connect("localhost","root","","abc_jobs");
$query=mysqli_query($conn,"select * from pending");

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
                <a class="nav-link active" href="job_provider_dashboard.php">
                  <span data-feather="home"></span>
                  Dashboard<span class="sr-only">(current)</span>

                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="jobs.php">
                  <span data-feather="clipboard"></span>
                  Job(s)
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="applicants.php">
                  <span data-feather="search"></span>
                  Applicant(s)
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="approved_candidates.php">
                  <span data-feather="clipboard"></span>
                  Approved Candidates
                </a>
              </li>
            </ul>
            </ul>
          </div>
        </nav>






<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="job_provider_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="#">Applicants</a></li>
  </ol>
</nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
<!--             <h1 class="h2">Applicants</h1> -->
            
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">

          </div>
          <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Job ID</th>
                <th>Job Provider ID</th>
                <th>Jobseeker Email</th>
                <th>Jobseeker ID</th>
                <th>Jobseeker CV</th>
                <th>Action</th>
            </tr>

        </thead>
        <?php
        include("connection/db.php");
        // $query=mysql_query($conn,"select * from admin_login");
        $query = mysqli_query($conn, "SELECT * FROM pending where provider_email='{$_SESSION['email']}'");
        while($row=mysqli_fetch_array($query)){
        ?>

            <tr>
                <th>Job ID</th>
                <th>Job Provider ID</th>
                <th>Jobseeker Email</th>
                <th>Jobseeker ID</th>
                <th>Jobseeker CV</th>
                <th>Action</th>
                <td>
                  <div class="row">
                    <div class="btn-group">

                      <a href="approve.php?edit=<?php echo $row['job_id'];?>" class="btn btn-ok"><span class="glyphicon glyphicon-ok"></span></a>
                      <a href="delete.php?del=<?php echo $row['job_id'];?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                    
                  </div>
                </td>
        
            </tr>
          <?php }?>
        </tbody>
<!--         <tfoot>
            <tr>
              <th>Job Provider Email</th>
              <th>Job Provider ID</th>
                <th>Jobseeker Email</th>
                <th>Jobseeker ID</th>
                <th>Jobseeker CV</th>
            </tr>
        </tfoot> -->
    </table>

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

          
          <div class="table-responsive">
            
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
<!-- <datatables plugin> -->
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
  <script>
    new DataTable('#example', {
    layout: {
        bottomEnd: {
            paging: {
                boundaryNumbers: false
            }
        }
    }
});
  </script>
    
  </body>
</html>