<!DOCTYPE html>
<html lang="en">
<head>
  <title>people</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
    <input type="text" name="Search" value="search" onfocus="if(this.value='search'){this.value='';}">
  <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
</div>
</div>
</div>
</nav>




<div class="container">
  <h2>Our People</h2>
  <p>Success comes from hardwork</p><br>
  <div class="media">
    <div class="media">
      <img src="images/passport.png" class="media-object" style="width:45px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">John Doe <small><i>Joined on February 19, 2016</i></small></h4>
      <p>We are going to win this time.</p>
      
      <!-- Nested media object -->
      <div class="media">
        <div class="media">
          <img src="images/passport1.png" class="media-object" style="width:45px">
        </div>
        <div class="media-body">
          <h4 class="media-heading">Kevin belly<small><i>Joined on February 20, 2016</i></small></h4>
          <p>I love it.</p>

          <!-- Nested media object -->
          <div class="media">
            <div class="media">
              <img src="images/passport2.png" class="media-object" style="width:45px">
            </div>
            <div class="media-body">
              <h4 class="media-heading">sammy purohar<small><i>Joined on February 21, 2016</i></small></h4>
              <p>I am going to defeat you.</p>
            </div>
          </div>
          
        </div>
        
        <!-- Nested media object -->
        <div class="media">
          <div class="media">
            <img src="images/passport3.png" class="media-object" style="width:45px">
          </div>
          <div class="media-body">
            <h4 class="media-heading">Pinalke bose <small><i>Joined on February 20, 2016</i></small></h4>
            <p>See you in Field.</p>
          </div>
        </div>
        
      </div>
    </div>
    
    <!-- Nested media object -->    
    <div class="media">
      <div class="media">
        <img src="images/passport4.png" class="media-object" style="width:45px">
      </div>
      <div class="media-body">
        <h4 class="media-heading">Raven bose<small><i>Joined on February 19, 2016</i></small></h4>
        <p>Eureka!!!.</p>
      </div>
    </div>

  </div>
</div>

</body>
</html>
