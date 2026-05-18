<?php 
session_start();
session_unset();
header("location:new-post.php");

include('connection/db.php');
$query=mysqli_query($conn,"select * from job_provider where email ='{$_SESSION['email']}'");
if ($query){
	header('location://localhost/abc_jobs/');
}else{
	header('location:new-post.php');

}
 ?>