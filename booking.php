<?php
session_start();
?>
<!DOCTYPE html>.
<html lang="en">
<head>
  <title>My Bookings</title>
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
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
        <li><a href="user-dashboard.php">Home</a></li>
        <li><a href="daboutus.php">About Us</a></li>
        <li><a href="dgallery.php">Gallery</a></li>
        <li><a href="dcontactsus.php">Contact Us</a></li>
      </ul>    
    <div class="nav navbar-nav navbar-right" style="padding: 20px";>
    <?php
       echo '<a>WELCOME <a/>'.$_SESSION['emailid'];
	   //echo '<a>WELCOME <a/>'.$_SESSION['empid'];
       echo '<br><a href="user-login.php?action=logout">LOGOUT</a>';
    ?>
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
    
  </tr>
  </thead>


</div
<div class="col-sm-2 sidenav"></div>
</div>
</body>
</html>
<?php



include('connect-mysql.php');
    
    
    $empid=$_SESSION['empid'];
$sql = "SELECT * FROM bookings WHERE empid='$empid'";
$result = mysqli_query($dbcon, $sql) or die("error");
 while($row = mysqli_fetch_assoc(mysqli_query($dbcon, $sql))){
	 $c= $row['is_confirmed'];
	 break;
	 
 }
 
if (mysqli_num_rows($result)==1) {
	if($c==1) {
    // output data of each row
    while($row = mysqli_fetch_assoc(mysqli_query($dbcon, $sql))){
        echo "<tr><td>";
echo $row['booking_id'];
echo "</td><td>";
echo $row['empid'];
echo "</td><td>";
echo $row['venue'];
echo "</td><td>";
echo $row['start_time'];
echo "</td><td>";
echo $row['end_time'];
	break;   }
}
if($c==0) {
	 echo "<p><h3><center>"."Your booking is on waiting"."</p></h3></center>";
 }
 
 }
else {
	echo "<h3><p><center>No records Found</center></p></h3>";
}
mysqli_close($dbcon);
?>