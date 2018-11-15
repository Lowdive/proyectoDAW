<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
  session_start();
  if(!isset($_SESSION['error']) or (!isset($_SESSION['order'])) or (!isset($_SESSION['action']))) {
         $MsgError = '';   
  } else {
         $MsgError = $_SESSION['error'];
         $order=$_SESSION['order'];
  }
?>

<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Discatch - Ultimate Disc Store</title>
    <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link rel="stylesheet" href="css/foundation.min.css"> 
  </head>
  <body>
    

    <!-- Start Top Bar -->
    <div class="top-bar">
      <div class="row">
        <div class="top-bar-left">
          <ul class="dropdown menu" data-dropdown-menu>
            <li class="menu-text">Discatch</li>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="store.php">Buy a Disc</a></li>
            <li><a href="stories.php">Stories</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->
    <br>

    <div class="column row">
      <hr>
          </div>
          <div class="media-object stack-for-small">
            <div class="media-object-section">
              <img class="thumbnail" src="img/disc0.jpg">
            </div>
            <div class="media-object-section">
              <h5>Discs for Everyone!</h5>
              <p>The finest Discraft 175g flying pieces of plastic for your enjoyment.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row column">
      <hr>
      <ul class="menu">
        <li>Discatch</li>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="store.php">Buy a Disc</a></li>
        <li><a href="stories.php">Stories</a></li>
        <li class="float-right">Copyright 2018</li>
      </ul>
    </div>


    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>