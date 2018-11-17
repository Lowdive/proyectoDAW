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
          <div class="media-object stack-for-small">
            <div class="media-object-section">
              <img class="thumbnail" src="img/disc1.jpg">
            </div>
            <div class="media-object-section">
              <h5>#1: Cat</h5>
              <p>"If you don't know who you're hucking it to, it doesn't really matter how you huck it"</p>
            </div>
          </div>
    </div>

    <div class="column row">
      <hr>
          <div class="media-object stack-for-small">
            <div class="media-object-section">
              <img class="thumbnail" src="img/disc2.jpg">
            </div>
            <div class="media-object-section">
              <h5>#2: Addicted</h5>
              <p>175g of white stuff</p>
            </div>
          </div>
    </div>

    <div class="row">
      <form method="post" action="controller/registerOrder.php">
                <label>Disc</label>
                <input type="number" name="discID" placeholder="ID of the disc, 1 or 2" required />
                 <label>Disc price : $150 MXN</label>
                 <input type="hidden" name="discPrice" value="150" required />
                 <label>Name</label>
                 <input type="text" name="name" placeholder="Your_Name" required />
                 <label>Email</label>
                 <input type="email" name="email" placeholder="Your_Email" required />
                 <input type="submit" class="button"  name="orderSubmit" value="Order"/>
            </form>
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