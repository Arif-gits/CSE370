echo $edit=$_GET['edit'];
<?php

include('connection/db.php');

  // $provider_email=$_POST['provider_email'];
  // $provider_id=$_POST['provider_id'];
  // $seeker_email=$_POST['seeker_email'];
  // $seeker_id=$_POST['seeker_id'];  



    $query=mysqli_query($conn,"insert into approve(provider_email, provider_id, seeker_email, seeker_id)values('$provider_email','$provider_id','$seeker_email','$seeker_id')");


            var_dump($query);
            if($query){
                echo "<script>alert('Now You Can Login!')</script>";
                header('location:job_post.php');
            }else{
                echo "<script>alert('Some Error! Please Try Again')</script>";
              }
?>