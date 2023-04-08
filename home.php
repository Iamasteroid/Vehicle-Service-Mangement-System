<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You Must Login First :)";
  	header('location: index.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>
<?php if (isset($_SESSION['success'])) : ?>
          <?php  ?> <?php endif ?>
<html><head>
<title>Welcome to Vechicle Service</title>
</head><style>

div {
  background-image: url('home.jpg');
   height:120%;
}

 h1 {text-align:center;}</style>
  <td align="top"> </td></style>
  <body><h1>Vehicle Service Management System </h1>
  </body>

<link rel="stylesheet" href="btn.css">
  <div class="btn-group">
    <button onclick="document.location='try.html'"><h3>New Vehicle</h3></button></br>
  <button onclick="document.location='customer.html'"><h3>Register a Customer</h3></button></br>
  <button onclick="document.location='addservice.html'"><h3>Add Service</h3></button></br>
 <button onclick="document.location='insurance1.html'"><h3>Renew an Insurance</h3></button></br>
 <button onclick="document.location='service.html'"><h3>Services</h3></button></br>
 <button onclick="document.location='details1.php'"><h3>Vehicle Details</h3></button></br>
 <button onclick="document.location='customerdetails.php'"><h3>Customer Details</h3></button></br>
 <button onclick="document.location='servicedetails.php'"><h3>Service Details</h3></button></br>
 <button onclick="document.location='index.php'"><h3>Logout</h3></button>
</div>
  </html>