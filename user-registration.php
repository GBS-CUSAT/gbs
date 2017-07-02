<?php
$newrec='';
$msg='';
$warning='';
$alre='';
if (isset($_POST['submitted']) && isset($_POST['terms']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['emailid']) && isset($_POST['empid']) && isset($_POST['phone']) && isset($_POST['dob'])) {
    include('connect-mysql.php');
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $emailid=$_POST['emailid'];
    $empid=$_POST['empid'];
    $phone=$_POST['phone'];
    $dob=$_POST['dob'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $sqlget="SELECT * FROM employees WHERE emailid='$emailid' or empid=$empid";
    $result=mysqli_query($dbcon,$sqlget) or die('error');   
    if(mysqli_num_rows($result)>0)
    {
      $alre="already registered";
    }

    if(isset($_POST['isadmin']))
        {$isadmin=1;
        }
    else {
        $isadmin=0;
    }

    if($password==$cpassword)
    {
    $sqlinsert="INSERT INTO employees (fname,lname,empid,dob,phone,emailid,password,is_admin) VALUES ('$fname','$lname','$empid','$dob','$phone','$emailid','$password','$isadmin')";

if(!mysqli_query($dbcon, $sqlinsert)){
    die('error');
}
$newrec = "request sumbitted";
}
else
{
  $msg='enter the same password';
}
}
else{
  $warning="fill in all the fields";
}
?>
<html lang="en">
<head>
  <title>User Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 

  #warn{
    color:#ff0000;
  }

    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

   .container-fluid { 
background: url("images/bg2.jpg") no-repeat center center fixed; 
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
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
      a{
        color: #FFFFFF;
      }
      .social:hover {
     -webkit-transform: scale(1.1);
     -moz-transform: scale(1.1);
     -o-transform: scale(1.1);
 }
 .social {
     -webkit-transform: scale(0.8);
     /* Browser Variations: */
     
     -moz-transform: scale(0.8);
     -o-transform: scale(0.8);
     -webkit-transition-duration: 0.5s;
     -moz-transition-duration: 0.5s;
     -o-transition-duration: 0.5s;
 }

/*
    Multicoloured Hover Variations
*/
 
 #social-fb:hover {
     color: #3B5998;
 }
 #social-tw:hover {
     color: #4099FF;
 }
 #social-gp:hover {
     color: #d34836;
 }
 #social-em:hover {
     color: #f39c12;
 }
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
    <div class="collapse navbar-collapse" id="myNavbar" style="position: fixed;">
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

  
<div class="container-fluid text-center">    
  <div class="row content">
   <div class="col-md-4 col-md-offset-4 text-left"> 
      <br/><b><a>Fill In The Details</a></b>
      <form method="post" action="user-registration.php">
      <input type="hidden" name="submitted" value="true">
  <div class="form-group">
    <br/>
    <a>First Name</a><input type="text" class="form-control" id="fname" value="first name" name="fname" onfocus="if(this.value=='first name'){ this.value='';}">
  </div>
  <div class="form-group">
    <a>Last Name</a><input type="text" class="form-control" id="lname" value="last name" name="lname" onfocus="if(this.value=='last name'){ this.value='';}">
  </div>
  <div class="form-group">
    <a>Employee Id:</a><input type="text" class="form-control" id="empid" value="employee id" name="empid" onfocus="if(this.value=='employee id'){ this.value='';}">
  </div>
  <div class="form-group">
    <a>Phone Number</a><input type="number" class="form-control" id="pwd" value="phone number" name="phone">
  </div>
  <div class="form-group">
    <a>Email Id</a><input type="email" class="form-control" id="pwd" value="email id" name="emailid" onfocus="if(this.value=='email id'){ this.value='';}">
  </div>
  <?php echo "<p id=\"warn\"> $alre </p>";
?>
  <div class="form-group">
    <a>Date Of Birth</a><input type="date" class="form-control" id="pwd" value="date of birth" name="dob">
  <div class="form-group">
  </div>
    <a>Password</a><input type="password" class="form-control" id="pwd" value="password" name="password" onfocus="if(this.value=='password'){ this.value='';}">
  </div>
  <div class="form-group">
    <a>Confirm Password</a><input type="password" class="form-control" id="pwd" value="password" name="cpassword" onfocus="if(this.value=='password'){ this.value='';}">
  </div>
<?php echo "<p id=\"warn\"> $msg </p>";
?>
  <div class="checkbox">
    <label><input type="checkbox" name="isadmin"><a>Admin</a></label>
  </div>
  <div class="checkbox">
    <label><input type="checkbox" name="terms"><a>I agree To The </a><a href="#"> Terms &amp; Conditions</a></label>
  </div>
  <button type="submit" class="btn btn-primary" style="">Submit</button>
</form>
<?php 
echo "<p id=\"warn\"> $warning </p>";
echo "<p id=\"warn\"> $newrec </p>";
?>

    </div>
  </div>
</div>
</div>
<!-- Social Footer, Colour Matching Icons -->
<!-- Include Font Awesome Stylesheet in Header -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<!-- // -->
<div class="container">

        <div class="text-center center-block">
            <p class="txt-railway">- hwsc.com -</p>
            <br />
                <a href="https://www.facebook.com"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
              <a href="https://twitter.com"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
              <a href="https://plus.google.com><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
              <a href="mailto:krishna7631@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
</div>
 
</div>

<br />

</body>
</html>
  