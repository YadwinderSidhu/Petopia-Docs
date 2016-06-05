<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title >Petopia</title>

<!-- Bootstrap -->
<link href="Content/bootstrap.min.css" rel="stylesheet" />
<link href="Content/bootstrap-theme.min.css" rel="stylesheet" />
<link href="Content/Style.css" rel="stylesheet" />
</head>
<style>
body {
	padding-top: 100px;
	background-color: white;
}
.navbar-collapse {
	text-align: center !important;
}
.navbar-nav {
	display: inline-block !important;
	float: none !important;
}
</style>
<body>
<div class="container">
  <?php
  include "menu.php";
  ?>
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
    <!-- Indicators -->
    <!--<ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
      <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    </ol>-->
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active"> <img src="images/petopia_dogs_6.jpg"> </div>
      <div class="item"> <img src="images/c800x1024-misty.jpg"><center>Petopia is amazing! The care and attention dogs get here is more than you could wish for! We are really impressed with the care and service. Our dog Misty just loves coming to Petopia for her day visits. 
Highly recommended!</center></div>
      <div class="item"> <img src="images/c800x1024-white_shepherd.jpg"></div>
      <div class="item"> <img src="images/c800x1024-pippa.jpg"><center>PAlways a very happy puppy (and exhausted from lots of play) when she gets home!</center></div>
      <div class="item"> <img src="images/c800x1024-petopia_1.jpg"></div>
      <div class="item"> <img src="images/c800x1024-bobbie.jpg"><center>Just had my 12 week old puppy stay at Petopia for a couple of nights and we cant recommend it highly enough. She was specially looked after in Joohee's house because of her age and size. Bobbie came home so happy and well taken care of and I had no worries or anxiety leaving her in such caring and reliable hands. Petopia is a haven for dogs and puppies and so clean and well organised, I wont have any hesitation in taking my beloved dog there again and really recommend it to anyone needing a place for their dog to stay.</center></div>
    </div>
    <!-- Controls --> 
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
</div>

<!-- Services and Rates --> 

<!-- Forms --> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="Scripts/jquery-1.9.1.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="Scripts/bootstrap.min.js"></script>
</body>
</html>