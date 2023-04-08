<?php
if(isset($_SESSION['username'])){
	header("location:Error.php");
}
?>
<html>
<head>
<title>Update Service Status</title>
</head>
<br><body bgcolor="orange">
<br><br>
<center> <h1>Vehicle Service Management System</h1><br>
<h4>Update Vehicle Service Status</h4>
<form action="UpdateVehiclestatus.php" method='post'>
<table cellpadding=5 cellspacing=5 border=5>
<tr>
<td>Enter Service ID</td><td><input type="text" name="service_id"> </td>
<tr>
<td>Owner Name </td><td><input type="text" name="owner_name"></td>
<tr>
<td>Vehicle Registration No</td><td><input type="text" name="vehicle_no"></td>
<tr>
<td>Service Name</td><td><select class="form-control" name="service_name">

        <option class="hidden"  selected disabled>Select Service</option>
        <option>Oil Service</option>
        <option>Water Wash</option>
        <option>Basic Checkup</option>
        <option>Engine Checkup</option>
        </select></td>
<tr>
<td>Update Status to</td><td><select class="form-control" name="STATUS">

        <option class="hidden"  selected disabled>Select Status</option>
        <option>Booked</option>
        <option>Service Pending</option>
        <option>Waiting For Delivery</option>
        <option>Delivered</option>
        </select></td>
</tr>
<tr>
<td><center><input type="submit" name="Cancel" value="Cancel"></center></td>
<td><center><input type="submit" name="Update" value="Update"></center></td>
</tr>
</table>
</form>