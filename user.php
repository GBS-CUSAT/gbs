<?php
session_start();
?>
<html lang="en">
<head>
  <title>Dashboard</title>
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
        
        <li><a href="user.php">Home</a></li>
        <li><a href="uaboutus.php">About Us</a></li>
        <li><a href="ugallery.php">Gallery</a></li>
        <li><a href="ucontactus.php">Contact Us</a></li>
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





<div class="container-fluid text-center" style="margin: 10px;">
<div class="row content">
<div class="col-sm-2 sidenav">
  
  <a href="ubooking.php"> <button class="btn btn-primary" style="width: 100%;"> My Bookings</button></a><br/><br/>
  <a href="ucircles.php"> <button class="btn btn-primary" style="width: 100%;">My Circle</button></a><br/><br/>
   
  
  <a href="uevents.php"> <button class="btn btn-primary" style="width: 100%;">Events</button></a><br/><br/>
   <a href="upeople.php"> <button class="btn btn-primary" style="width: 100%;">People</button></a><br/><br/> 
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="width: 100%;">Feedback</button>
   

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Feel Free To Share</h4>
        </div>
        <div class="modal-body">
          <input type="text" value="feedback" name="feedback" style="width: 100%; height:10%;"></input>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">submit</button>
        </div>
      </div>
      
    </div>
  </div>
  <br/><br/>
  
   
 

</div>    
<div class="col-sm-8">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <a href="ubooky.php"><img src="images/football.jpg" alt="Football"></a>
      <div class="carousel-caption">
        <h3>Football</h3>
        <p>You Can Be The Next Leo Messi!</p>
      </div>
    </div>

    <div class="item">
      <a href="ubooky.php"><img src="images/cricket.jpg" alt="Cricket"></a>
      <div class="carousel-caption">
        <h3>Cricket</h3>
        <p>Follow Cricket, Worship Tendulkar</p>
      </div>
    </div>

    <div class="item">
      <a href="ubooky.php"><img src="images/table-tennis.jpg" alt="Table-Tennis"></a>
      <div class="carousel-caption">
        <h3>Table Tennis</h3>
        <p>Not As Easy As It Seems</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<h2> Click To Book</h2>
</div>
    
    <div class="col-sm-2 sidenav">
       
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p></p>
</footer>



</body>
</html>