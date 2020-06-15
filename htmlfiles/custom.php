<!DOCTYPE html>
<html>
  <head>
    <title>DIY Creation & Events</title>
  </head>
 
  <link rel="stylesheet" type="text/css" href="../css/overlay.css" />
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="../css/navbar.css" />
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 <!--  <script type="text/javascript" src="custom.js"></script> -->

<script type="text/javascript">
      
function multiply() {
var quan1= document.getElementById('lootbag').value;
// var price1=document.getElementById('p1').value;
var answer1=document.getElementById('a1');
var comp1= quan1*15;
answer1.value=comp1;

var quan2= document.getElementById('candle').value;
// var price2=document.getElementById('p2').value;
var answer2=document.getElementById('a2');
var comp2= quan2*7;
answer2.value=comp2;

var quan3= document.getElementById('candies').value;
// var price3=document.getElementById('p3').value;
var answer3=document.getElementById('a3');
var comp3= quan3*20;
answer3.value=comp3;

var quan4= document.getElementById('invi').value;
// var price4=document.getElementById('p4').value;
var answer4=document.getElementById('a4');
var comp4= quan4*15;
answer4.value=comp4;


var quan5= document.getElementById('mug').value;
// var price5=document.getElementById('p5').value;
var answer5=document.getElementById('a5');
var comp5= quan5*50;
answer5.value=comp5;

var quan6= document.getElementById('hand').value;
// var price6=document.getElementById('p6').value;
var answer6=document.getElementById('a6');
var comp6= quan6*25;
answer6.value=comp6;

var quan7= document.getElementById('pillow').value;
// var price7=document.getElementById('p7').value;
var answer7=document.getElementById('a7');
var comp7= quan7*30;
answer7.value=comp7;


var quan8= document.getElementById('ref').value;
// var price8=document.getElementById('p8').value;
var answer8=document.getElementById('a8');
var comp8= quan8*25;
answer8.value=comp8;

var quan9= document.getElementById('key').value;
// var price9=document.getElementById('p9').value;
var answer9=document.getElementById('a9');
var comp9= quan9*10;
answer9.value=comp9;

var quan10= document.getElementById('hat').value;
// var price4=document.getElementById('p4').value;
var answer10=document.getElementById('a10');
var comp10= quan10*10;
answer10.value=comp10;


var overall=document.getElementById('overall');
var total= comp1+comp2+comp3+comp4+comp5+
comp6+comp7+comp8+comp9+comp10;
overall. value=total;
    }


</script>
   

 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="footer, address, phone, icons" />

  <link rel="stylesheet" href="../css/demo.css">
  <link rel="stylesheet" href="../css/footer-distributed-with-address-and-phones.css">
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <body>
<div class=" mainrow"> 
        <div class="row">
        <div class="col-sm-12 page-hero d-flex align-items-center justify-content-center">
        <ul class="top">  
          <li   class="shado display-3">Diy Creation & Events</h1> 

          </li>
        </ul>
  </div>      
        </div>
 <!--        <div ">
          <ul class="top2">
            <li><a href="#">My Order </a></li>
          </ul>  
        </div> -->
      
      </div>

      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" href="../htmlfiles/home.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="../htmlfiles/Occasion.php">Occasion</a>
        </li>
        <li class="nav-item dsb">
          <a class="nav-link disabled" href="#" style="color:red">BOOK NOW</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../htmlfiles/contact.php">Contacts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../htmlfiles/Gallery.php">Gallery</a>
        </li>
      </ul>
  <div class="container">

      <hr />
      <h2 align="center">Retail Products</h2>
      <hr/>
<h5>See sample photos on the Gallery Menu</h5>
<hr/>  
<form>
  <div class="form-row">
       <div class="col-7">
      <p type="text" class="form-control">Loot Bag</p>
    </div>
    <div class="col">
      <input oninput="multiply()" id="lootbag" type="number" class="form-control" pattern=" 0+\.[0-9]*[1-9][0-9]*$" placeholder="Quantity">
    </div>
    <div class="col">
       <p type="number" class="form-control" >P15.00</p>
    </div>
    <div class="col">
      <input  class="form-control" id="a1" type="number" name="">
    </div>
  </div>

    <div class="form-row">
       <div class="col-7">
      <p type="text" class="form-control">Candle</p>
    </div>
    <div class="col">
      <input oninput="multiply()" id="candle" type="number" class="form-control" pattern=" 0+\.[0-9]*[1-9][0-9]*$" placeholder="Quantity">
    </div>
    <div class="col">
 <p type="number" class="form-control">P7.00</p>
    </div>
    <div class="col">
      <input  class="form-control" id="a2" type="number" name="">
    </div>
  </div>

    <div class="form-row">
       <div class="col-7">
      <p type="text" class="form-control">Candies</p>
    </div>
    <div class="col">
      <input oninput="multiply()" id="candies" type="number" class="form-control" pattern=" 0+\.[0-9]*[1-9][0-9]*$" placeholder="Quantity">
    </div>
    <div class="col">
 <p type="number" class="form-control">P20.00</p>
    </div>
    <div class="col">
      <input  class="form-control" id="a3" type="number" name="">
    </div>
  </div>

    <div class="form-row">
       <div class="col-7">
      <p type="text" class="form-control">Invitation</p>
    </div>
    <div class="col">
      <input oninput="multiply()" id="invi" type="text" class="form-control" pattern=" 0+\.[0-9]*[1-9][0-9]*$" placeholder="Quantity">
    </div>
    <div class="col">
 <p type="text" class="form-control">P15.00</p>
    </div>
    <div class="col">
      <input  class="form-control" id="a4" type="number" name="">
    </div>
  </div>

  <div class="form-row">
       <div class="col-7">
      <p type="text" class="form-control">Mug</p>
    </div>
    <div class="col">
      <input oninput="multiply()" id="mug" type="text" class="form-control" pattern=" 0+\.[0-9]*[1-9][0-9]*$" placeholder="Quantity">
    </div>
    <div class="col">
 <p type="text" class="form-control">P50.00</p>
    </div>
    <div class="col">
      <input  class="form-control" id="a5" type="number" name="">
    </div>
  </div>

    <div class="form-row">
       <div class="col-7">
      <p type="text" class="form-control">Hand Sanitizer</p>
    </div>
    <div class="col">
      <input oninput="multiply()" id="hand" type="text" class="form-control" pattern=" 0+\.[0-9]*[1-9][0-9]*$" placeholder="Quantity">
    </div>
    <div class="col">
       <p type="text" class="form-control">P25.00</p>
    </div>
    <div class="col">
    <input  class="form-control" id="a6" type="number" name="">
    </div>
  </div>

    <div class="form-row">
       <div class="col-7">
      <p type="text" class="form-control">Pillow</p>
    </div>
    <div class="col">
      <input oninput="multiply()" id="pillow" type="text" class="form-control" pattern=" 0+\.[0-9]*[1-9][0-9]*$" placeholder="Quantity">
    </div>
    <div class="col">
 <p type="text" class="form-control">P30.00</p>
    </div>
    <div class="col">
      <input  class="form-control" id="a7" type="number" name="">
    </div>
  </div>

    <div class="form-row">
       <div class="col-7">
      <p type="text" class="form-control">Ref Magnet</p>
    </div>
    <div class="col">
      <input oninput="multiply()" id="ref" type="text" class="form-control" pattern=" 0+\.[0-9]*[1-9][0-9]*$" placeholder="Quantity">
    </div>
    <div class="col">
 <p type="text" class="form-control">P25.00</p>
    </div>
    <div class="col">
<input  class="form-control" id="a8" type="number" name="">
    </div>
  </div>

    <div class="form-row">
       <div class="col-7">
      <p type="text" class="form-control">Key Chain</p>
    </div>
    <div class="col">
      <input oninput="multiply()" id="key" type="text" class="form-control" pattern=" 0+\.[0-9]*[1-9][0-9]*$" placeholder="Quantity">
    </div>
    <div class="col">
 <p type="text" class="form-control">P10.00</p>
    </div>
    <div class="col">
<input  class="form-control" id="a9" type="number" name="">
    </div>
  </div>

    <div class="form-row">
       <div class="col-7">
      <p type="text" class="form-control">Party Hat</p>
    </div>
    <div class="col">
      <input oninput="multiply()" id="hat" type="text" class="form-control" pattern=" 0+\.[0-9]*[1-9][0-9]*$" placeholder="Quantity">
    </div>
    <div class="col">
 <p type="text" class="form-control">P10.00</p>
    </div>
    <div class="col">
<input  class="form-control" id="a10" type="number" name="">
    </div>
  </div>
<td align="right"> Total:</td> 
  <td><input class="form-control" id="overall" type="number" name="" ></td>
  <hr/>
  <div class="row">
 
  <div class="col-md-12" style="width: 100%" align="right">
  <input type="button" name="" value="Avail Now!" class="buttons">
</div>
</form>

</div>

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
            <p>+63 9568569421</p>
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
</html>


