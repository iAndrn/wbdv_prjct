<?php 

    require('conn.php');

    if(isset($_POST['user']) and isset($_POST['pass']))
    {

        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $query = "SELECT * FROM `admins` WHERE user='$user' and pass='$pass'";

        $result = mysqli_query($conn,$query);
        $cnt = mysqli_num_rows($result);

        if($cnt == 1){
            
            echo "<script>window.setTimeout(function() {window.location = '../order.php';}, 1000);alert('Login success');</script>";
        }
        else {
            echo "<script type='text/javascript'>alert('Login Failed')</script>";    
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="login.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
    

</head>

<body>
  <div class="container">
    <div class="row vertical-center">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5 ">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" method="POST" action="login.php">
              <div class="form-label-group">
                <input type="text" id="inputEmail" name="user" class="form-control" placeholder="Admin User" required autofocus>
                <label for="inputEmail">Administrator</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
              <hr class="my-4">
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>


