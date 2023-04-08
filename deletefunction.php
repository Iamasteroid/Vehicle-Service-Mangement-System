<?php
echo '<body bgcolor="orange">';
if(isset($_SESSION['username'])){
	header("location:C:\wamp\www\vsms\dbms  project/errors.php");
}
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"registration");

$query_6=" DELETE FROM `addingservice` WHERE service_id='$_POST[service_id]'";

 if( ! mysqli_query($con,$query_6) )
{
die('Error' . mysqli_error());
}
else
{
echo 'Service Details Deleted !! ';		
}
echo '<br><br>';
echo '<a href="home.php"> Back  to Home </a>';
echo '</body>';
?>