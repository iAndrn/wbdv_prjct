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
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <link href="bootstrap\bootstrap.min.css">
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">

    <script href="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

    <style>
    
    body{
        margin: 20px !important;
    }

    </style>

    




    
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/bootstrap.js"></script>
    <script src="jquery/datatables/js/jquery.dataTables.min.js"></script>
  

    



</head>
<body>



    <table id="data-table" class="table table-bordered table-striped">


        <thead>
    <tr>
      <th class="th-sm">Customer #
      </th>
      <th class="th-sm">Email 
      </th>
      <th class="th-sm">Contact
      </th>
      <th class="th-sm">Occasion</th>
      <th class="th-sm">Package</th>
      <th class="th-sm">Comments</th>
      
      
    </tr>
  </thead>

  <?php 


  
    if($total_rows > 0 ){
        foreach($all_result as $row)
        {
            
            echo '
            <tr>
                <td>' .$row["customer_id"].'</td>

                <td>' .$row["customerEmail"].'</td>
                <td>' .$row["contactNumber"].'</td>
                
                <td>' .$row["occasion"].'</td>
                <td>' .$row["package"].'</td>
                <td>' .$row["comment"].'</td>
                
                

                

                
            </tr>';
        }
    }


    
  ?>
  


    </table>


    
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