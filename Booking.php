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
  
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Booking form</h3>
      </div>
      <div class="panel-body">
        <form method="post" action="mail.php">
          <div class="form-group">
            <div class="col-md-10">
              <label for="Membership" class="control-label">Petopia Membership Number(If you know)</label>
              <input type="text" minlength="4" name="MembershipNumber" class="form-control" placeholder="Petopia Membership Number" required/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-10">
              <label for="GuardianName" class="control-label">Full Name</label>
              <input type="text" minlength="4" name="GuardianName" class="form-control" placeholder="Full name" required/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-10">
              <label for="DogName" class="control-label">Name of Dog's</label>
              <input type="text"  name="DogName" class="form-control" placeholder="Dog One" required/><br />
              <input type="text"  name="DogName1" class="form-control" placeholder="Dog Two(Optional)"/><br />
              <input type="text"  name="DogName2" class="form-control" placeholder="Dog Three(Optional)"/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-10">
              <label for="Phone" class="control-label">Phone</label>
              <input type='tel' pattern="[0-9]{10,11}" name="Phone" class="form-control" placeholder="Phone" minlength="10" maxlength="11" required/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-10">
              <label for="FromDate" class="control-label">Dog Stay From</label>
              <input type="date" name="FromDate" class="form-control" placeholder="From Date"/>
              <input type="time" name="FromTime" class="form-control" placeholder="From Time"/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-10">
              <label for="ToDate" class="control-label">To</label>
              <input type="date" name="ToDate" class="form-control" placeholder="To Date"/>
              <input type="time" name="ToTime" class="form-control" placeholder="To Time"/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-10">
              <label for="SpecialReq" class="control-label">Special Requirements</label>
              <input type="text"  name="SpecialReq" class="form-control" placeholder="Special Requirements"/>
            </div>
          </div>
         
          <div class="form-group">
            <div class="col-md-10">
              <p class="text-justify">
                <label for="Accept" class="control-label"></label>
                <input type="checkbox" name="Accept" selected />
                I, the owner/guardian of the aforementioned dog/s, understand that Petopia Limited and its staff (Hereafter collectively “Petopia”) agree to exercise due diligence and care to the boarding of our dog/s. <br />I understand that despite the best efforts of the staff at Petopia, accidents can occur. Pursuant to this agreement and in consideration of the due diligence exercised by the staff, I do not hold Petopia for any liable in respect to loss or damage resulting from disease, theft, fire, death, escape, or injury to my dog. <br />Should Veterinary care be required for illness or accident during my dog’s stay at Petopia, I accept that any veterinary charges will be my responsibility. <br />I thoroughly read all sections of “Petopia Policies” and accept all the terms, conditions, and statements.</p>
            </div>
          </div>
         
          <div class="form-group">
            <div class="col-md-10">
              <label for="Continue" class="control-label"></label>
              <input type="submit" name="Submit" class="btn btn-primary"  value="Submit"/>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="Scripts/jquery-1.9.1.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="Scripts/bootstrap.min.js"></script>
</body>
</html>