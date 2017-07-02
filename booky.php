<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Book</title>
</head>
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
        <li class="active" >
		</li>
        <li><a href="user-dashboard.php">Home</a></li>
        <li><a href="daboutus.php">About Us</a></li>
        <li><a href="dgallery.php">Gallery</a></li>
        <li><a href="dcontactus.php">Contact Us</a></li>
      </ul>    
    <div class="nav navbar-nav navbar-right" style="padding: 20px";>
    <?php
	$b = $_SESSION['empid'];
	//echo '<a>WELCOME <a/>'.$_SESSION['empid'];
       echo '<a>WELCOME <a/>'.$_SESSION['emailid'];
       echo '<br><a href="user-login.php?action=logout">LOGOUT</a>';
    ?>
</div>
</div>
</div>
</nav>
<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <!h3 class="margin"><!/h3>
  <img src="images/book.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
  <h3></h3>
</div>
<!--formden.js communicates with FormDen server to validate fields and submit via AJAX -->
<script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>

<!-- Special version of Bootstrap that is isolated to content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->

<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
   <form method="post" action="booky.php">
    <!form action="https://formden.com/post/MlKtmY4x/" class="form-horizontal" method="post">
     <div class="form-group ">
      <label class="control-label col-sm-2 requiredField" for="date">
       Date 
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="col-sm-10">
       <div class="input-group">
        <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
       </div>
      </div>
     </div>
     <div class="form-group">
      
     </div>
    <!/form>
   </div>
  </div>
 </div>
</div>


<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>


<div class="container">
  <h2>Select your Venue</h2>
  <p></p>
  <!form>
    <div class="radio">
      <label><input type="radio" name="optradio" value="football">Football</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio" value="tabletennis">Table Tennis</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio" value="badminton">Badminton</label>
    </div>
	<div class="radio">
      <label><input type="radio" name="optradio" value="field1">Field1</label>
    </div>
	<div class="radio">
      <label><input type="radio" name="optradio" value="field2">Field2</label>
    </div>
	<div class="radio">
      <label><input type="radio" name="optradio" value="field3">Field3</label>
    </div>
  <!/form>
  <br>
  <br>
  <!form action="/action_page.php">
  <select name="Time">
    <option value="09:00:00">9:00 am</option>
    <option value="12:00:00">12:00 noon</option>
    <option value="03:00:00">3:00 pm</option>
    
  </select>
  <br><br><br>
 
<!/form>
</div>
      
     <div class="form-group">
      <div class="col-sm-10 col-sm-offset-2">
       <input name="_honey" style="display:none" type="text"/>
       <!button class="btn btn-primary " name="submit" type="submit" onclick="myalert()">
        
		
       <!/button>
	   <script>
	 //  function myalert() {
	  // alert("Your Choice is Availabile click on submit to book");
	   
	   //}
	   	 
	 
	   </script>
	   
	  <button class="btn btn-primary " name="submit" type="submit">
        Submit
		
       </button>
	   </form>
      </div>
     </div>
    </form>
	
   </div>
  </div>
 </div>
</div>
</form>
</body>

</html>
<?php
//echo "i am here";
$newrec='';
$p=1;
if (isset($_POST['submit'])) {
    include('connect-mysql.php');
	$sqlget11="SELECT * FROM bookings WHERE empid='$b'";
	
    $result=mysqli_query($dbcon,$sqlget11) or die('error');
	
    $venue=$_POST['optradio'];
    $date=($_POST['date']);
	$Time=($_POST['Time']);
	if($Time=="09:00:00") {
	 $ETime = "12:00:00";
	}
	if($Time=="12:00:00") {
	 $ETime = "03:00:00";
	}
	if($Time=="03:00:00") {
	 $ETime = "06:00:00";
	}
    $combinedDT = date('Y-m-d H:i:s', strtotime("$date $Time"));
	$ecombinedDT = date('Y-m-d H:i:s', strtotime("$date $ETime"));
	$sqlget12="SELECT start_time FROM bookings WHERE venue='$venue'";
	$resultt=mysqli_query($dbcon,$sqlget12) or die('error');
	while($row = mysqli_fetch_assoc($resultt)){
		//echo "starttime: " . $row["start_time"];
        $j = $row["start_time"];
		if($j==$combinedDT) {
		$p=0;
		break;
		}
		
	   }
	   if($p==1) {
	if(mysqli_num_rows($result)==0) {
    $sqlinsert="INSERT INTO bookings (empid,venue,start_time,end_time) VALUES ('$b','$venue','$combinedDT','$ecombinedDT')";

if(!mysqli_query($dbcon, $sqlinsert)){
    die('error');
}
$newrec = "request sumbitted";
echo "<p><h3><center>You have successfully registered your bookings.See my bookings for confirmation</center></h3></p>";
	}
	else {
		echo "<P><h3><center> You already have a booking </center></h3></p>";
	}

	  }
	  else {
		  echo"<p><center><h3>Already booked</h3><center></p>";
	  }
	}

?>