<?php
echo '<body bgcolor="orange">';
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"registration");
$query="select  Owner_name,vehicle_no,Company_name,vehicle_model,Date from newvehicle ";
$result = mysqli_query($con,$query);
echo '<table border="15">';
echo '<tr>';
echo '<th>Owner Name </th>';
echo '<th>Registration Number </th>';
echo '<th>Manufacturer </th>';
echo '<th>Model</th>';
echo '<th>Date</th>';
echo '</tr>';
if( mysqli_num_rows( $result )==0 ){
echo '<tr><td colspan="7">No Vehicle Details Found</td></tr>';
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
echo '<a href="home.php"> back </a>';
echo '</body>';
?>
<html><head>
<title>Vehicle Details</title>
</head>
