<?PHP 
require('conn.php');



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
        echo "<script>window.setTimeout(function() {window.location = '../login/login.php';}, 1000);alert('0rder Sent');</script>";
        
       

   
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
        <option selected>Birthdays</option>
        <option value="Wedding">Wedding</option>
        <option value="Baptism">Baptism</option>
        <option value="Parties">Parties</option>
        <option value="Others">Others.</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Package</label>
      <select id="inputState" class="form-control" name="package">
        <option value="Package A" selected>Package A</option>
        <option value="Package B">Package B</option>
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
</body>

</html>