<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CHOW</title>

<!-- Custom styles for this profile page -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

  </head>

  <body>

       <?php
include "nav.php";
include_once 'connect.php';
$sql = "SELECT * FROM user WHERE username = '$_SESSION[username]'" ;
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

?>
    <!-- Page Content -->
    <section class="py-5">
      <div class="container">
        
        
    <!--profile code-->
    <div class="container">
    <div class="fb-profile">

    <div class="fb-profile-text">


            <h1><?php echo "$row[fname]"; ?>'s Profile</h1>

            <table style="border: none; font-family:Arial;font-weight: bold">
            	<tr>
            		<td> Name:</td>
            		<td> <?php echo "$row[fname] $row[lname]"; ?></td>
            	</tr>
            	<tr>
            		<td> Email:</td>
            		<td><?php echo "$row[email]"; ?></td>
            	</tr>
            	<tr>
                    <td> Phone:</td>
                    <td><?php echo "$row[phone]"; ?></td>
                </tr>
                <tr>
                    <td> Address:</td>
                    <td><?php echo "$row[address]"; ?></td>
                </tr>
	        </table>        
        </div>
    </div>

</div> <!-- /container -->  
	<div class ="col-md-3"></div>
    <div class="col-md-3">
    <form class="form-inline" role="form" class="pagination-right" action="profileEdit.php">
    <div class="form-group" align="right">
    <button type="submit" class="btn btn-xl btn-danger"> Edit</button>
          <!-- <button type="submit" class="btn btn-xl btn-danger"> Edit</button> -->
      
    </form>
    </div>
</div></section>




  </body>

</html>

