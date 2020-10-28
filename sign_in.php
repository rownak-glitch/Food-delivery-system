<?php
    include_once 'connect.php';

    if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $type = "user";
    $query = "SELECT * FROM user where username = '$username' ";
    $result = mysqli_query($conn,$query);

    $row = mysqli_fetch_assoc($result);

    $db_username = $row['username'];
    $db_password = $row['password'];

    if ($username === $db_username && $password === $db_password)
    {   
        session_start();
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = $username;
        $_SESSION['type'] = $type;
        header("location:index.php");

    }
    else
    {
        echo '<script language="javascript">';
        echo 'alert("Invalid username or password!")';
        echo '</script>';

    }

}
?>

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


    <!-- Sign In Form-->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pr-wrap">
                <div class="pass-reset">
                    <label>
                        Enter the email you signed up with</label>
                        <div class="form-group">
                    <input type="email" placeholder="Email" />
                        </div>
                        
            </div>
            <div class="wrap">
                
                <form class="login" method="post" action="sign_in.php">
                <div class="form-group">
                <input type="text" name="username" placeholder="Username" />
                </div>
                <div class="form-group">
                <input type="password" name="password" placeholder="Password" />
                </div>
                <div class="form-group">
                <input type="submit" name="login" value="Sign In" class="btn btn-xl btn-danger"  />
                </div>
                </form>
                <div class ="col-md-3"></div>
    <div class="col-md-3">
    <form class="form-inline" role="form" class="pagination-right">
    <div class="form-group" align="right">
        
            </div>
        </div>
    </div>
   
</div>

  </body>

</html>   
    