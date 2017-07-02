<!DOCTYPE html>.
<html lang="en">
<head>
  <title>Confirm Bookings</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style >
      /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
  </style>
   
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <!li class="active" ><!a href="#">HWSC<!/a><!/li>
        <li><a href="user-dashboard.php">Home</a></li>
        <li><a href="daboutus.php">About Us</a></li>
        <li><a href="dgallery.php">Gallery</a></li>
        <li><a href="dcontactus.php">Contact Us</a></li>
      </ul>    
    <div class="nav navbar-nav navbar-right" style="padding: 20px";>
    <input type="text" name="Search" value="search" onfocus="if(this.value='search'){this.value='';}">
  <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
</div>
</div>
</div>
</nav>
  <div class="row content" style="padding-top: 10px;">
  <div class="col-sm-2 sidenav"></div>
  <div class="col-sm-8">
<table class="table table-bordered">  
  <thead>
  <tr>
    <th>Booking Id</th>
    <th>Employee Id</th>
    <th>Venue</th>
    <th>Start-Time</th>
    <th>End-Time</th>
    <th>Accept</th>
  </tr>
  </thead>
<?php
$empid=0;
include('connect-mysql.php');
$sqlget = "SELECT * FROM bookings WHERE is_confirmed=0";
$sqldata = mysqli_query($dbcon, $sqlget) or die('error displaying data');
while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
echo "<tr><td>";
$empid=$row['empid'];
echo $row['booking_id'];
echo "</td><td>";
echo $row['empid'];
echo "</td><td>";
echo $row['venue'];
echo "</td><td>";
echo $row['start_time'];
echo "</td><td>";
echo $row['end_time'];
echo "</td><td>";
echo "<form action=\"confirm-bookings.php\" method=\"POST\">";
echo "<input type = \"hidden\" name=\"submitted\" value=\"true\">";
echo "</input>";
echo "<input type=\"checkbox\" name=\"submitc[]\" method=\"POST\" value=\"$empid\" >";
echo "</td></tr>";
}//end of while statement
echo "</table>";
echo "<br>";
echo "<input type=\"submit\" value=\"accept selected\" class=\"btn btn-primary\">";
?>
<?php
if(isset($_POST['submitc'])) {
$name=$_POST['submitc'];
foreach ($name as $key) {
$sqlinstert="UPDATE bookings SET is_confirmed=1 where empid=$key";
if(!mysqli_query($dbcon,$sqlinstert)){
die('error');
}
}
}
?>
</div
<div class="col-sm-2 sidenav"></div>
</div>
</body>
</html>