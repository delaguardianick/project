<?php
  if(!isset($_SESSION)) 
  { 
      session_start(); 
  } 
?>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/navbar.css">
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nav-bar">
  <a class="navbar-brand" href="index.php">
    <img src="source/logo.jpg" alt="logo" id="logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Types of Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="rideToDest.php">Ride to Destination</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="rideAndDeliv.php">Ride & Deliver</a>
        </div>
      </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutUs.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Reviews</a>
        </li>
        <?php
        //is the user logged in? if they are then change nav bar
          if(isset($_SESSION["userid"])){
            echo "<li class='nav-item'><a class='nav-link' href='profile.php'>Profile Page</a></li>";
            echo "<li class='nav-item'><a class='nav-link' href='includes/logout.inc.php'>Logout</a></li>";
          }
          else{
            //if not logged in
            echo "<li class='nav-item'><a class='nav-link' href='signup.php'>Sign Up</a></li>";
            echo "<li class='nav-item'><a class='nav-link' href='login.php'>Login</a></li>";
          }
        ?>
        <li class="nav-item">
          <a class="nav-link" href="#">Shopping Cart</a>
        </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0 btn-outline-light" type="submit">Search</button>
    </form>
  </div>
</nav>