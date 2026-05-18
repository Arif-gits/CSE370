<?php
session_start();
if ($_SESSION['email']==true){
 
}else{
  header("location:job_post.php");
}
  ?>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit Job</h1>
            
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
              <!-- <a class="btn btn-primary "href= "add_customer.php">Add Customer</a> -->
            </div>
          </div>
          <div style="width: 60%; margin-left: 20%; background-color: #F2F4F4;">
           
            <form action="" method="post" style="margin: 3%; padding: 3%;" name="job_form" id="job_form">
             <div id="msg"></div>
              <div class="form-group">
                  <label for="job_title">Job Title</label>
                  <input type="text" value="<?php echo $Title;  ?>" name="job_title" id="job_title" class="form-control" placeholder="Enter Job Title">
                </div>

              <div class="form-group">
                <label for="des">Description</label>               
                <textarea name="des" id="des" class="form-control" cols="30" rows="10"><?php echo $Description; ?></textarea>
              </div>

                <div class="form-group">
                
              <input type="submit" class="btn btn-block btn-success" placeholder="Submit" name="submit" id="submit">               
            </div>              
              

            
          </div>

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

          
          <div class="table-responsive">
            
          </div>
        </main>
      </div>
    </div>
    

<?php
include('connection/db.php');
if (isset($_POST['submit'])){

  $query1=mysqli_query($conn,"SELECT email,id FROM cv WHERE email = $_SESSION['email']");
  $seeker_id=$_POST['id'];
  $seeker_email=$_SESSION['email'];



  $query = mysqli_query($conn, "SELECT * FROM jobseeker WHERE email='$email' OR mobile_number = '$mobile_number'");
  if ($query1){
    echo "<script> alert('Record has beeen successfully Updated!!!!')</script>";
    header('location:jobs.php');
  }else{
    echo "<script> alert('There is some error! Please try again!!!!')</script>";
  }
}
?>