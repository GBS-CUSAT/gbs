<?php
$newrecord="";
if(isset($_POST['submitted'])) {
  include('connect-mysql.php');
  $venue=$_POST['venue'];
  $duration=$_POST['duration'];
  $strength=$_POST['strength'];
  $start_time=$_POST['start_time'];
  $end_time=$_POST['end_time'];
  $image_path=$_POST['image_path'];
  $description=$_POST['description'];
  if(isset($_POST['is_active']))
        {
          $is_active=1;
        }
    else {
        $is_active=0;
    }

  $sqlinsert = "INSERT INTO venues (venue,duration,strength,start_time,end_time,is_active,image_path,description) VALUES ('$venue','$duration','$strength','$start_time','$end_time','$is_active','$image_path','$description')";
  if (!mysqli_query($dbcon,$sqlinsert)){
    die('error');
    } // end of nested if statement
    echo "record inserted";
    header("location:venue-creation.php");
    exit;
}
  
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Venue creation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    a{
        color: #0000ff;
      }

      .container-fluid { 
background: url("images/bg2.jpg") no-repeat center center fixed; 
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
  </style>
   
</head>
<body>
<div class="main">
<nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <div class="navbar-header">
      <!a class="navbar-brand" href="#">HWSC<!/a>
    </div>
    <ul class="nav navbar-nav"  style="position: fixed">
      <li class="active"><a href="#">Venue Creation</a></li>
      <li><a href="user-dashboard.php">Home</a></li>
      <li><a href="daboutus.php">About Us</a></li>
      <li><a href="dcontactus.php">Contact</a></li>
      <li><a href="dgallery.php">Gallery</a></li>
    </ul>
  </div>   
 </nav>

<div class="container-fluid text-center">
<div class="jumbotron"><h1>Hiland Woods Sports Centre<br/><small><p>Let's Play!!!</p></small></h1></div>

  
<div class="container-fluid text-center">    
  <div class="row content">
  
   <div class="col-md-4 col-md-offset-4 text-left"> 
      <br/><b><a>Fill In The Details</a></b>
      <form method="post" action="venue-creation.php">
      <input type="hidden" name="submitted" value="true">
  <div class="form-group">
    <br/>
    <a>venue</a><input type="text" class="form-control" id="venue" value="venue" name="venue" onfocus="if(this.value=='venue'){ this.value='';}">
  </div>
  <div class="form-group">
    <a>duration</a><input type="time" class="form-control" id="duration" value="duration" name="duration" onfocus="if(this.value=='duration'){ this.value='';}">
  </div>
  <div class="form-group">
    <a>no of players</a><input type="number" class="form-control" id="strength" value="strength" name="strength" onfocus="if(this.value=='strength'){ this.value='';}">
  </div>
  <div class="form-group">
    <a>start time</a><input type="time" class="form-control" id="pwd" value="start_time" name="start_time">
  </div>
  <div class="form-group">
    <a>end time</a><input type="time" class="form-control" id="pwd" value="end_time" name="end_time">
  </div>
  <div class="form-group">
    <a>image path</a><input type="text" class="form-control" id="pwd" value="image_path" name="image_path" onfocus="if(this.value=='image_path'){ this.value='';}">
  <div class="form-group">
  </div>
    <a>description</a><input type="text" class="form-control" id="pwd" value="description" name="description" onfocus="if(this.value=='description'){ this.value='';}">
  </div>
  <div class="checkbox">
    <label><input type="checkbox" name="is_active"><a>Active</a></label>
  </div>
  <button type="submit" class="btn btn-primary" style="">Submit</button>
</form>

    </div>
  </div>
</div>
</div>
  


</body>
</html>