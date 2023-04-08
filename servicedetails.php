<?php
echo '<body bgcolor="">';
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"registration");
$query="select  service_id,vehicle_no,vehicle_model,owner_name,service_name,status,Date from addingservice ";
$result = mysqli_query($con,$query);
echo '<table border="5" align="center">';
echo '<tr>';
echo '<th>Service ID </th>';
echo '<th>Vehicle Registration </th>';
echo '<th>Manufacturer & Model </th>';
echo '<th>Owner Name </th>';
echo '<th>Service Name </th>';
echo '<th>Status</th>';
echo '<th>Expected Delivery </th>';
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
echo '</body>';
?></br>
<html><html><head>
<title>Service Details</title>
</head><body>
    <style>
        .button{text-align:center;}
        </style>
    <div class="button">
<button onclick="document.location='updateservice.php'" class="button"><h2>Update Status</h2></button>
<button onclick="document.location='delete.php'" class="button"><h2>Delete Service</h2></button>
</div>
</body>
</html>
