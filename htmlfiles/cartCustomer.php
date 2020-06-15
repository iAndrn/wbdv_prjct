<?PHP 
require('orderDetails/conn.php');



if(isset($_POST['submit']))
    {

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['emailAdd'];
        $contact = $_POST['contactNum'];
        $address = $_POST['add'];
        $occas = $_POST['occas'];
        $package = $_POST['package'];
        $dateVal = $_POST['dateVal'];
        $cmmt = $_POST['cmmt'];

        $query = "INSERT INTO `customers` (`customer_id`, `firstName`, `lastName`, `customerEmail`, `contactNumber`, `customerAddress`, `Occasion`,`package`,`targetDate`,`time`, `comment`) VALUES (NULL, '$fname', '$lname', '$email', '$contact', '$address','$occas','$package','$dateVal', CURRENT_TIMESTAMP, '$cmmt');";

        $result = mysqli_query($conn,$query);
        echo "<script>window.setTimeout(function() {window.location = 'home.php';}, 1000);alert('0rder Sent');</script>";
        
       

   
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="footer, address, phone, icons">

  <link rel="stylesheet" href="../css/demo.css">
  <link rel="stylesheet" href="../css/footer-distributed-with-address-and-phones.css">
  
  

  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <title>DIY Creation & Events</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="../css/navbar.css" >
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script type="text/javascript" src="../js/TweenMax.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.css"> 
  
  <link href="../css/shop-homepage.css" rel="stylesheet">

</head>
<style>

body {
  padding-top: 0px !important;
}
</style>

<body>
<div class=" mainrow">
    <div class="row">
        <div class="col-sm-12 page-hero d-flex align-items-center justify-content-center">
        <h1 class="shado display-3">Diy Creation & Events</h1>
        </div>
    </div>
     </div>

<div class="container">
<br>
<h3 class="text-center">Customer Details</h3>
<form method="post" action="">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="FirstName">First Name</label>
      <input type="text" class="form-control" name="fname"  id="inputFirstname" placeholder="First Name" required minlength="4" maxlength="16">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Last Name</label>
      <input type="text" class="form-control" name="lname" id="inputLastname" placeholder="Last Name" required minlength="5" maxlength="16">
    </div>
  </div>
 <div class="form-group">
    <label for="inputAddress">Email Address</label>
    <input type="email" class="form-control" name="emailAdd" id="inputEmail4" placeholder="1234 Abc@email.com">
  </div>
  <div class="form-row">
  <div class="form-group col-md-4 ">
    <label for="inputAddress2">Contact Number</label>
    <input type="text" class="form-control" name="contactNum" id="inputNumber" placeholder="0917-463-7765" required minlength="11" maxlength="11" title="Specify Contact number"pattern="[0]{1}[9]{1}[0-9]{9}">
  </div>
  <div class="form-group col-md-8">
      <label for="inputCity">Address</label>
      <input type="text" class="form-control" name="add" id="inputAddress" minlength="5" >
    </div>  
  </div>

  <div class="form-row d-flex justify-content-between">
    <div class="form-group col-md-3">
      <label for="inputState">Occasions</label>
      <select id="inputState" class="form-control" name="occas">
        <option selected value="Birthday">Birthday</option>
        <option value="Baptism">Baptismal</option>
        <option value="Others">Others.</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Package</label>
      <select id="inputState" class="form-control" name="package">
        <option value="Package 1" selected>Package 1</option>
        <option value="Package 2">Package 2</option>
        <option value="Custom">Custom</option>
      </select>
    </div>
    

    <div class="form-group col-md-3">
      <label for="inputCity">Target Date</label>
      <input class="form-control" name="dateVal" type="date" value="2019-01-01" id="example-date-input">
    </div>



    

  
  </div>
  <div class="form-group">
  <label for="exampleFormControlTextarea2">For Notes and Custom Packages</label>
  <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" name="cmmt" rows="3" ></textarea>
</div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

</div>


 <footer class="footer-distributed">

      <div class="footer-left">

        <h3>DIY Creation and Events</h3>

        <p class="footer-links">
          <a href="#">Home</a>
          ·
          <a href="#">Blog</a>
          ·
          <a href="#">Pricing</a>
          ·
          <a href="#">About</a>
          ·
          <a href="#">Faq</a>
          ·
          <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">Company Name &copy; 2017</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>Quezon City</span> Metro Manila</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+63 9959143409</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">diy@company.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>About the company</span>
          We help clients organize Events and supplies souvenir
        </p>

        <div class="footer-icons">

          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>

        </div>

      </div>

    </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="../jquery/jquery.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>

</body>

</html>
