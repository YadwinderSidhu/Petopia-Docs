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
        <h3 class="panel-title">Enrolment form</h3>
      </div>
      <div class="panel-body">
        <h4>Guardian Info</h4>
        <form method="post" action="Step2Enrolment.php">
          <div class="form-group">
            <div class="col-md-10">
              <label for="GuardianName" class="control-label">Full Name</label>
              <input type="text" name="Name" minlength="4" class="form-control" placeholder="Full name" required/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-10">
              <label for="StreetAddress" class="control-label">Street Address</label>
              <input type="text"  name="StreetAddress" class="form-control" placeholder="Street address" required/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-10">
              <label for="City" class="control-label">City</label>
              <input type="text" name="City" class="form-control" placeholder="City" required/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-10">
              <label for="PostalCode" class="control-label">Postal Code</label>
              <input type="text" pattern="[0-9]+" name="PostalCode" class="form-control" placeholder="Postal code" required/>
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
              <label for="WorkPhone" class="control-label">Work Phone</label>
              <input type='tel' name="WorkPhone" class="form-control" placeholder="Work phone" maxlength="11" minlenght="10" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-10">
              <label for="Email" class="control-label">Email</label>
              <input type="email" name="Email" class="form-control" placeholder="Email" required/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-10">
              <hr>
              <h4>Guardian 2</h4>
              <hr>
              <label for="GuardianName" class="control-label">Full Name</label>
              <input type="text"  minlength="4" name="GuardianName" class="form-control" placeholder="Full name" required/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-10">
              <label for="Guardian2PHone" class="control-label">Phone</label>
              <input type='tel' pattern="[0-9]{10,11}" name="Guardian2PHone" class="form-control" placeholder="Phone" minlength="10" maxlength="11" required/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-10">
              <label for="Continue" class="control-label"></label>
              <input type="submit" name="Continue" class="btn btn-primary"  value="Continue"/>
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