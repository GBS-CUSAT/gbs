<!DOCTYPE html>
<html lang="en">
<head>
  <title>Confirm Users</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

   
</head>
<body>
<div class="main">
<nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <div class="navbar-header">
      <!a class="navbar-brand" href="#">HWSC<!/a>
    </div>
    <ul class="nav navbar-nav" >
      <li class="active"><a href="#">User Requests</a></li>
      <li><a href="user-dashboard.php">Home</a></li>
      <li><a href="daboutus.php">About Us</a></li>
      <li><a href="dcontactus.php">Contact</a></li>
      <li><a href="dgallery.php">Gallery</a></li>
    </ul>
  </div>
</nav>

<div class="container-fluid text-center">
<div class="jumbotron"><h1>Hiland Woods Sports Centre<br/><small><p>Let's Play!!!</p></small></h1></div>
  <h1>User Requests!<br/><small>They Wish To Join</small></p></h1>

  <div class="row content">
  <div class="col-sm-2 sidenav"></div>
  <div class="col-sm-8">
<table class="table table-bordered">  
  <thead>
  <tr>
    <th>Employee Id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>DOB</th>
    <th>Phone-No.</th>
    <th>Email-id</th>
    <th>Admin</th>
    <th>Accept</th>
  </tr>
  </thead>
<?php
$empid=0;
include('connect-mysql.php');
$sqlget = "SELECT * FROM employees WHERE is_active=0";
$sqldata = mysqli_query($dbcon,$sqlget) or die('error displaying data');
while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
echo "<tr><td>";
$empid=$row['empid'];
echo $row['empid'];
echo "</td><td>";
echo $row['fname'];
echo "</td><td>";
echo $row['lname'];
echo "</td><td>";
echo $row['dob'];
echo "</td><td>";
echo $row['phone'];
echo "</td><td>";
echo $row['emailid'];
echo "</td><td>";
echo $row['is_admin'];
echo "</td><td>";
echo "<form action=\"confirm-users.php\" method=\"POST\">";
echo "<input type=\"hidden\" name=\"submitted\" value=\"true\">";
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
$sqlinsert="UPDATE employees SET is_active=1 WHERE empid=$key";
if(!mysqli_query($dbcon,$sqlinsert)){
die('error');
}
echo "accepted successfully";
}
}
?>
</div>
<div class="col-sm-2 sidenav"></div>
</div>
</body>
</html>