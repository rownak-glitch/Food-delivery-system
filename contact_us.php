<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CHOW</title>
    
  </head>

  <body>
<?php
  include "nav.php";
?>

    
<header>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="carousel-item item active">
      <img style="height:500px; width:100%;" src="images/cheesepizza.jpg" alt="picture 1">
    </div>

    <div class="carousel-item item">
      <img src="images/grilled.jpg" style="height:500px; width:100%;" alt="picture 2">
    </div>

    <div class="carousel-item item">
      <img src="images/c_image_03.jpg" alt="picture 3" style="height:500px; width:100%;">
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
</header

    <!-- Page Content -->
    <section class="py-5">
      <div class="container">
        <h1>Contact Us</h1>
        
      <!-- Contact us form-->
      <div class="container">
<div class="col-md-5" id="contact_form">
    <div class="form-area">  
        <form role="form">
        <br style="clear:both;">
                    <h3 style="margin-bottom: 25px; text-align: center;"></h3>
            <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
          </div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                        <!-- <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                     -->
                    </div>
            
        <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
        </form>
    </div>
</div>
</div>
</section>


      <!-- Contact us form ends Here-->
<br>
<br>
<br>


  </body>

</html>

