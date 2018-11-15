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

    <div class="row">
      <div class="medium-6 columns">
        <img class="thumbnail" src="http://placehold.it/650x350">
        <div class="row small-up-4">
          <div class="column">
            <img class="thumbnail" src="http://placehold.it/250x200">
          </div>
          <div class="column">
            <img class="thumbnail" src="http://placehold.it/250x200">
          </div>
          <div class="column">
            <img class="thumbnail" src="http://placehold.it/250x200">
          </div>
          <div class="column">
            <img class="thumbnail" src="http://placehold.it/250x200">
          </div>
        </div>
      </div>
      <div class="medium-6 large-5 columns">
        <h3>My Awesome Product</h3>
        <p>Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in.</p>

        <label>Size
        <select>
          <option value="husker">Small</option>
          <option value="starbuck">Medium</option>
          <option value="hotdog">Large</option>
          <option value="apollo">Yeti</option>
        </select>
        </label>

        <div class="row">
          <div class="small-3 columns">
            <label for="middle-label" class="middle">Quantity</label>
          </div>
          <div class="small-9 columns">
            <input type="text" id="middle-label" placeholder="One fish two fish">
          </div>
        </div>

        <a href="#" class="button large expanded">Buy Now</a>

        <div class="small secondary expanded button-group">
            <a class="button">Facebook</a>
            <a class="button">Twitter</a>
            <a class="button">Yo</a>
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


    

<!-- <html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Foundation | Welcome</title>
        <link rel="stylesheet" href="css/foundation.min.css" type="text/css"/>
        <link rel="stylesheet" href="css/main.css" type="text/css"/>
        <link rel="stylesheet" href="css/app.css" type="text/css"/>
    </head>
    <body>
        <div id="login">
            <h3>Login</h3>
            <form method="post" action="controller/login.php" >
                <label>Username</label>
                <input type="text" name="username" autocomplete="off" />
                <label>Password</label>
                <input type="password" name="password" autocomplete="off"/>
                <div class="errorMsg"><?php echo $MsgError; ?></div>
                <input type="submit" class="button" name="loginSubmit" value="Login">
            </form>
            <a href='registration.php'>Register</a>
        </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
    </body>
</html> -->
