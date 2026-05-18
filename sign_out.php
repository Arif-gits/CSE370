<?php 
session_start();
session_unset();
header("location:job_post.php");

include('connection/db.php');
$query=mysqli_query($conn,"select * from jobseeker where email ='{$_SESSION['email']}'");
if ($query){
	header('location://localhost/abc_jobs/');
}else{
	header('location:job_post.php');

}
 ?>