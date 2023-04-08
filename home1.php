<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: index.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>
<div class="header">
 <style>h2{text-align: center;}</style>
	<h2>Vehicle Service Management System</h2><br>
</div>

<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="./Home Page_files/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="./Home Page_files/home.css">
</head>

<body>
    <div class="button-group">
    </br></br></br>
        <button onclick="document.location='try.html'"><h2>New vehicle</h2></button>
        <button onclick="document.location='customer.html'"><h2>Customer registration</h2></button>
        <button onclick="document.location='addservice.html'"><h2>Add service</h2></button>
        <button onclick="document.location='insurance1.html'"><h2>Insurance</h2></button>
    
        <button onclick="document.location='service.html'"><h2>Services</h2></button>
      
        <a href="index.php"><button><h2> Logout</h2> </button></a> 
       </br>
    <button onclick="document.location='details1.php'"><h2>Vehicle details</h2></button>
    <button onclick="document.location='customerdetails.php'"><h2>customer details</h2></button>
    <button onclick="document.location='servicedetails.php'"><h2>Service details</h2></button>
    </div>


</body></html>