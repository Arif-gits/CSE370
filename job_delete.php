<?php
include('connection/db.php');
$del=$_GET['del'];
$query=mysqli_query($conn,"Delete from all_jobs where job_id='$del'");
if ($query){
	echo "<script> alert('Record has beeen successfully Deleted !!!!')</script>";
	header('location:jobs.php');
}else{
	echo "<script> alert('Record has beeen successfully Deleted !!!!')</script>";

}
?>