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
</header>


    

        <!--Search Button-->
    <br>
    
    <div class ="col-md-3"></div>
    <div class="col-md-">
    <?php
include "search.php";
?>
    </div>
    <br>

    <div class="container">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h2 class="gallery-title">Search Results</h2>
        </div>

        


          <?php
                if(isset($_POST['search']) != 0 ){
                  $location = $_POST['area'];

                  if ($location==NULL) {
                  }
                  else{
                    $search = mysqli_real_escape_string($conn, trim($location));
                    $sql = "SELECT * FROM restaurant WHERE location LIKE '%$search%'";
                    $fetch = mysqli_query($conn,$sql);
                    $restaurant = mysqli_fetch_assoc($fetch);
                    if ($restaurant!=0) {
                      $sql = "SELECT * FROM restaurant WHERE location LIKE '%$search%'";
                      $result = mysqli_query($conn,$sql);
                      $response = array();
                      while($row = mysqli_fetch_array($result))
                      {
                       
                        echo "<br><a href=\"restaurant.php?id=$row[0]\">";
                        
                        ?>
                      <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                        <?php
                      echo "<h1>".$row['name']."</h1>";
                      ?>
                      </div>  </a>
                      <?php
                      }
                    }
                    else{
                      echo "Nothing found!";
                    }
                  }                  
                }
              ?>  
            
            
           

            
        </div>
    </div>

<br>
<br>
<br>




  </body>

</html>