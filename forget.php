<!DOCTYPE html>.
<html lang="en">
<head>
  <title>forget password</title>
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
      
    </div>
    <ul class="nav navbar-nav" >
    <li><a href="user-login.php">Login</a></li>  
      
    </ul>
  </div>   
 
  
</nav>
<div class="row">
<div class="container-fluid  text-align: center">    
  
<div class="col-sm-4 col-sm-offset-4">
<div class="center-block"> 
      <br/><b>Generate your new Password</b>
      <form method="post" action="forget.php">
      <input type="hidden" name="submitted" value="true">
  <div class="form-group">
    <br/>
    Employee id:<input type="text" class="form-control" id="empid" value="first name" name="empid" onfocus="if(this.value=='first name'){ this.value='';}">
  </div>
  
  
 
 
   
  
  
 
  <div class="form-group">
  </br>
   Registered Email-id:<input type="text" class="form-control" id="emailid" value="" name="emailid" onfocus="if(this.value=='max duration'){ this.value='';}">
  </div>
  <div class="form-group">
  </br>
  <button type="submit" class="btn btn-primary" style="">Generate</button>
  </div>
  </form>

    </div>
	</div></div></div>
	
  


</body>
</html>
<?php

if(isset($_POST['submitted'])){
include('connect-mysql.php');
    
    $empid=$_POST['empid'];
    $emailid=$_POST['emailid'];
$sql = "SELECT * FROM employees WHERE empid='$empid' and emailid='$emailid'";
$result = mysqli_query($dbcon, $sql) or die("error");

if (mysqli_num_rows($result)==1) {
    // output data of each row
    while($row = mysqli_fetch_assoc(mysqli_query($dbcon, $sql))){
        echo "<h3><center><p>Your password is"." " . $row["password"] . "</h3></center></p>"; 
		break;
	   }
} else {
    echo "0 results";
}

mysqli_close($dbcon);
}
?> 