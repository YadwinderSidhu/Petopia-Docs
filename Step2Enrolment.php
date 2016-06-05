<?php 
session_start();

$_SESSION['Name'] = $_POST['Name'];
$_SESSION['StreetAddress'] = $_POST['StreetAddress'];
$_SESSION['City'] = $_POST['City'];
$_SESSION['PostalCode'] = $_POST['PostalCode'];
$_SESSION['Phone'] = $_POST['Phone'];
$_SESSION['WorkPhone'] = $_POST['WorkPhone'];
$_SESSION['Email'] = $_POST['Email'];
$_SESSION['GuardianName'] = $_POST['GuardianName'];
$_SESSION['Guardian2PHone'] = $_POST['Guardian2PHone'];

?>
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
        <h4>Vet Info</h4>
        <form method="post" action="Step3Enrolment.php">
          <div class="form-group">
            
            <div class="col-md-10">
            <label for="EName" class="control-label">Name of your Veterinarian</label>
              <input type="text"  minlength="4" name="VeterinarianName" class="form-control" placeholder="Name of your Veterinarian" required/>
            </div>
          </div>
          
          <div class="form-group">
            
            <div class="col-md-10">
            <label for="clinicName" class="control-label">Name of clinic</label>
              <input type="text" name="clinicName" class="form-control" placeholder="Name of clinic" required/>
            </div>
          </div>
          <div class="form-group">
            
            <div class="col-md-10">
            <label for="clinicName" class="control-label">Date of last DPH inoculation(Distemper, Hepatitis, Parvovirus) </label>
              <input type="date" name="DateDPH" class="form-control" required/>
            </div>
          </div>
          <div class="form-group">
            
            <div class="col-md-10">
            <label for="clinicName" class="control-label">Date of last kennel cough</label>
              <input type="date" name="DateCough" class="form-control" required/>
            </div>
          </div>
          
          <hr>
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