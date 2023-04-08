<?php
echo '<body bgcolor="">';
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"registration");
$query="select  Name,Address,Phone_no,Email_id,Date from customer ";
$result = mysqli_query($con,$query);
echo '<table border="10" align="center">';
echo '<h1> Customer Details</h1>';
echo '<tr>';
echo '<th>Name </th>';
echo '<th>Address </th>';
echo '<th>Phone No </th>';
echo '<th>Email ID</th>';
echo '<th>Date </th>';
echo '</tr>';
if( mysqli_num_rows( $result )==0 ){
echo '<tr><td colspan="7">No Rows Returned</td></tr>';
}
else
{
while ($rows=mysqli_fetch_array($result,MYSQLI_ASSOC))
{    
echo '<tr>';
foreach ($rows as $data)
{
echo "<td align='center'>".$data."</td>";
}
echo '</tr>';
}
}
echo '</table>';
echo '<br><br>';
echo '<a href="home.php"> Back to Home </a>';
echo '</body>';
?>
<html><head>
<title>Customer Details</title>
</head>

