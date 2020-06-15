<?php 

    include('conn.php');

    $statement = $conn-> prepare("SELECT * FROM customers ORDER BY customer_id;");
    
    $statement -> execute();

    $all_result = $statement -> fetchAll();

    $total_rows = $statement -> rowCount();


    
    
    if(isset($_GET["id"]))
    {
        
        $del_id = $_GET["id"];
        $statement = $conn -> prepare("DELETE FROM customers WHERE customer_id = $del_id;");
        $statement->execute();
        header("location:order.php");
    }
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DIY Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <script href="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css" >

    <link rel="stylesheet" href="../css/footer-distributed-with-address-and-phones.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css" >
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" >
    




    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/bootstrap.js"></script>
    <script src="jquery/datatables/js/jquery.dataTables.min.js"></script>

    <style>
    
    body{
        margin: 10px !important;
        font-size: 16px;
    }

    </style>





    
  
  

    



</head>
<body>

<div class="white">
    <div class="row">
        <div class="col-sm-12 page-hero d-flex align-items-center justify-content-center">
        <a href="login.php"><h1 class="display-3 d-flex align-items-center justify-content-center">Diy Creation & Events-Admin</h1></a>
        </div>
    </div>
     </div>

    <table id="data-table" class="table table-bordered table-striped">

<br>
        <thead>
    <tr>
      <th class="th-sm">Customer #
      </th>
      <th class="th-sm">First Name
      </th>
      <th class="th-sm">Last Name
      </th>
      <th class="th-sm">Email 
      </th>
      <th class="th-sm">Contact
      </th>
      <th class="th-sm">Address
      </th>
      <th class="th-sm">Occasion</th>
      <th class="th-sm">Package</th>
      <th class="th-sm">Date Received</th>
      <th class="th-sm">TargetDate</th>
      <th class="th-sm"></th>
      
    </tr>
  </thead>

  <?php 
    if($total_rows > 0 ){
        foreach($all_result as $row)
        {
            echo '
            <tr>
                <td>' .$row["customer_id"].'</td>
                <td>' .$row["firstName"].'</td>
                <td>' .$row["lastName"].'</td>
                <td>' .$row["customerEmail"].'</td>
                <td>' .$row["contactNumber"].'</td>
                <td>' .$row["customerAddress"].'</td>
                <td>' .$row["occasion"].'</td>
                <td>' .$row["package"].'</td>
                <td>' .$row["time"].'</td>
                <td>' .$row["targetDate"].'</td>

                <td><a href="#" id="'.$row["customer_id"].'" class="delete"><span class="glyphicon glyphicon-remove"></span></a></td>

                
            </tr>';
        }
    
    }

    
  ?>
  


    </table>

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
    
</body>
<script>
    $(document).ready(function(){
        var table = $('#data-table').DataTable();


        $(document).on('click','.delete', function(){

            var id = $(this).attr("id");

            if(confirm("Remove?"))
            {
                window.location.href="order.php?delete=1&id="+id;
            }
            else
            {
                return false;
            }
        });
    });
</script>
</html>