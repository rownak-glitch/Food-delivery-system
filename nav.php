  <?php
  session_start();
  require_once 'connect.php';
  ?>

  <!-- Navigation -->
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>chow</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery lirary-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
nav{
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  font-size: 20px;
  
  color: white;
}


li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
.navbar-brand{
  color: white;
  font-weight: 400;
  text-align: left;
  font-size: 20px;;
}
</style>
    

  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-blue fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">CHOW</a>
      
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="nav navbar-nav">
          <li>
            <a href="index.php">Home </a>

          </li>
          <li><a href="faq.php">FAQ</a>

          </li>
          <li><a href="about_us.php">About Us</a>

          </li>


          <li><a href="contact_us.php">Contact Us</a>  </li>

          
        </ul>

        <?php

        if(isset($_SESSION['valid'])!=true){
          ?>
          <ul class="nav navbar-nav navbar-right">
          <li><a href="sign_in.php">Sign In</a></li>
          <li><a href="sign_up.php">Sign Up</a></li>
          
          
          
          </ul>
        <?php
        }
        else{
          ?>
          <ul class="nav navbar-nav navbar-right">
          <li><a href="profile.php">Profile</a></li>
          <li><a href="logout.php">Logout</a></li>
          </ul>
          <?php
        }
        ?>

    </div>
  </div>
</nav>  
  </body>
  </html>