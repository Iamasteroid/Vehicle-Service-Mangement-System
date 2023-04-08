<?php
if(isset($_SESSION['username'])){
	header("location:Error.php");
}
?>
<html>
<br><body bgcolor="orange">
<br><br>
<center> <h1>Vehicle Service Management System</h1><br>
<h4>Delete a Service</h4>
<form action="deletefunction.php" method='post'>
<table cellpadding=5 cellspacing=5 border=5>
<tr>
<td>Service ID</td><td><input type="text" name="service_id"> </td>
<tr>
<td><center><input type="submit" name="Cancel" value="Cancel"></center></td>
<td><center><input type="submit" name="delete" value="Delete"></center></td>
</tr>
</table>
</form>