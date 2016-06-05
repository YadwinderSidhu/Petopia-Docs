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
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12" id="About"> </div>
  </div>
  <!-- Services and Rates -->
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12" id="Services"> </div>
  </div>
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Services and Rates</h3>
    </div>
    <div class="panel-body">
      <h4><b> Day care rates </b></h4>
      <table border="1" cellpadding="7" >
        <tr>
          <td></td>
          <td></td>
          <td><b>Price Per Day</b></td>
          <td><b>Concession card Price</b></td>
        </tr>
        <tr>
          <td><b>Casual</b></td>
          <td> One day </td>
          <td> $35.00 </td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><b>10x concession card</b></td>
          <td> 1x </td>
          <td><center>
              $27.00
            </center></td>
          <td><center>
              $270
            </center></td>
        </tr>
        <tr>
          <td></td>
          <td> 2x </td>
          <td><center>
              $25.50
            </center></td>
          <td><center>
              $255
            </center></td>
        </tr>
        <tr>
          <td></td>
          <td> 3x </td>
          <td><center>
              $24.00
            </center></td>
          <td><center>
              $240
            </center></td>
        </tr>
        <tr>
          <td></td>
          <td> 4x </td>
          <td><center>
              $22.50
            </center></td>
          <td><center>
              $225
            </center></td>
        </tr>
      </table>
      <h4><b>Kennel Rates</b></h4>
      <table border="1" cellpadding="5" >
        <tr>
          <td><b>DOG SIZE</b></td>
          <td><b>DAILY CHARGE</b></td>
        </tr>
        <tr>
          <td> Small / Medium Dog (under 23kg) </td>
          <td> $25 </td>
        </tr>
        <tr>
          <td> Large /X-Large Dog </td>
          <td> $27 </td>
        </tr>
        <tr>
          <td> Christmas, New Year, Easter & long weekends </td>
          <td> No surcharge applied </td>
        </tr>
      </table>
      <h4><b>DOG FLEA AND WORM TREATMENT &amp; APPLICATION</b></h4>
      We also offer Flea and Worm Treatment and application for our Day Care and Kennel Clients. Our computer system keeps track of when your dog’s next flea/worm treatment is due and we administer the treatment for the cost of a single dose.  We do not charge a fee for the application. <br>
      <br>
      
      <table border="1" cellpadding="5" >
      PRICE PER TREATMENT
        <tr>
        	<th></th>
            <th>Flea</th>
            <th>Worm</th>
        </tr>
        <tr>
          <td> Small 5-10kg </td>
          <td> $17</td>
          <td> $12</td>
        </tr>
        <tr>
          <td> Medium 10-20kg </td>
          <td> $18</td>
          <td> $15</td>
        </tr>
        <tr>
          <td> Large 20kg </td>
          <td> $19</td>
          <td> $18</td>
        </tr>
      </table>
      <br>
      For larger dogs please enquire.
      <h4><b>DOG GROOMING</b></h4>
      We offer <b>doggie baths</b> (wash and dry) as well as ‘The Works’ service. <br>
      <b>The Works</b> services includes: wash, dry, ears cleaned, nails clipped, and a good brush.<br>
      <b>The full grooming</b> service is to be arranged with professional groomers from Pampered Pooch, The Dog Squad and Pretty Paws Dog Grooming.<br>
      These services are for Petopia kennel guests and day care members only.<br>
      <br>
      <table border="1" cellpadding="5" >
        <tr>
          <td><b>DOG SIZE</b></td>
          <td><b>BATH</b></td>
          <td><b>THE WORKS</b></td>
        </tr>
        <tr>
          <td> Small dog(under 10kg) </td>
          <td> $15 </td>
          <td> $35 </td>
        </tr>
        <tr>
          <td> Medium Dog (under 23kg) </td>
          <td> $25 </td>
          <td> $45 </td>
        </tr>
        <tr>
          <td> Large dog </td>
          <td> $35 </td>
          <td> $55 </td>
        </tr>
      </table>
    </div>
  </div>
  
  <!-- Forms -->
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12" id="Services"> <br/>
      <br/>
      <hr>
      <br/>
      <br/>
    </div>
  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="Scripts/jquery-1.9.1.min.js"></script> 
  <!-- Include all compiled plugins (below), or include individual files as needed --> 
  <script src="Scripts/bootstrap.min.js"></script> 
</div>
</body>
</html>