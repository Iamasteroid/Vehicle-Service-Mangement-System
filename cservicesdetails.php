<?php
if(isset($_SESSION['username'])){
	header("location:Error.php");
}
?>
<html>
<head>
<title> Vehicle Service Management System</title><link rel="stylesheet" href="C:\wamp\www\vsms\dbms  project\Home Page_files.css">
</head> -->
<br><body bgcolor="orange">
<a href="ShowroomManagement.php"> Back </a>
<br><br>
<center> <h1>Vehicle Service Management System</h1><br>
<h4>Service Details</h4>
<form action="servicesdetails.php" method='post'>
<table cellpadding=5 cellspacing=5 border=5>
<tr>
<td>Owner Name</td><td><input type="text" name="owner_name"> </td>
<tr>
<td>Date of Registration</td><td><input type="text" name="DATE_OF_REGISTRATION"></td>
<tr>
<td>Expected Delivery Date</td><td><input type="text" name="DATE_OF_DELIVERY"></td>
<tr>
<td>Vehicle Registration Number</td><td><input type="text" name="vehicle_no"></td>
<tr>
<td>Service Name</td><td><input type="text" name="service_name"></td>
<tr>
<td>Status Of The Vehicle</td><td><input type="text" name="STATUS"></td>
</tr>
<tr>
<td><center><input type="submit" name="Cancel" value="Cancel"></center></td>
<td><center><input type="submit" name="submit" value="submit"></center></td>
</tr>
</table>
</form>