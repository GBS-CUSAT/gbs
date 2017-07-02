<?php
$wc='';
session_start();
if(isset($_POST['submit'])){
	include('connect-mysql.php');
    $emailid=$_POST['emailid'];
    $password=$_POST['password'];
    $sqlget="SELECT * FROM employees WHERE emailid='$emailid' and password='$password'";
	$sqlget1="SELECT * FROM employees WHERE emailid='$emailid'";
    $result=mysqli_query($dbcon,$sqlget) or die('error');
	
    
if(mysqli_num_rows($result)==1) {
	
        while($row = mysqli_fetch_assoc(mysqli_query($dbcon, $sqlget1))){
        $a = $row["is_admin"];
		$b = $row["empid"];
		$e = $row["is_active"];
		break;
	   }
	   if($e==1) {
   if($a==1) {
    $_SESSION['emailid']=$emailid;
	$_SESSION['empid']=$b;
    header('Location:user-dashboard.php');
   }
   else {
	  $_SESSION['emailid']=$emailid;
	  $_SESSION['empid']=$b;
    header('Location:user.php'); 
   }
   }

   if($e==0) {
	echo "<h3><p><center>Your registration is on waiting</h3></p></center>" ;  
}
}
else
   {
	  //while($row = mysqli_fetch_assoc(mysqli_query($dbcon, $sqlget1))){
        //echo "password: " . $row["is_admin"]. "<br>";
		//break;
	   //}
    $wc="wrong credentials";
   }

}
?>  
<html lang="en">
<head>
  <title>User Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
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
     .container-fluid { 
background: url("images/bg.jpg") no-repeat center center fixed; 
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
    

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
        <!li class="active" ><!a href="#">HWSC<!/a><!/li>
        <li><a href="home.php">Home</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contactus.php">Contact Us</a>
</li>
</ul>
          </div>
  </div>
</nav>

<div class="container-fluid text-center">
<div class="jumbotron"><h1>Hiland Woods Sports Centre<br/><small><p>Let's Play!!!</p></small></h1></div>


<div class="col-md-4 col-md-offset-4 text-left"> 
<div class="form-group">
<form action="user-login.php" method="post">
      
      <a>username</a>
      <input type="email" name="emailid" value="email id" class="form-control" onfocus="if(this.value='email id'){ this.value='';}"><br/>
      <a>password</a>
      <input type="password" name="password" value="password" class="form-control" onfocus="if(this.value='password'){ this.value='';}"><br/>
      <input type="submit" name="submit" value="login" class="btn btn-primary">
      <?php
      echo $wc;
      ?>
      <br><a href="forget.php" style="padding-bottom: 10px;"><br>Forgot Password</a>
      </form>
      </div>
</div>
</div>
</body>
</html>