<?php 
session_start();

$_SESSION['VeterinarianName'] = $_POST['VeterinarianName'];
$_SESSION['clinicName'] = $_POST['clinicName'];
$_SESSION['DateDPH'] = $_POST['DateDPH'];
$_SESSION['DateCough'] = $_POST['DateCough'];


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
        <h4>Dog Info</h4>
        <form method="post" action="Step4Enrolment.php">
          <div class="form-group">
            
            <div class="col-md-10">
            <label for="DogName" class="control-label">Dog Name</label>
              <input type="text" minlength="4" name="DogName" class="form-control" placeholder="Dog name" required/>
            </div>
          </div>
          <div class="form-group">
            
            <div class="col-md-10">
            <label for="Breed" class="control-label">Breed</label>
              <input type="text" name="Breed" class="form-control" placeholder="Breed" required/>
            </div>
          </div>
          <div class="form-group">
            
            <div class="col-md-10">
            <label for="sex" class="control-label">Sex</label>
              <select class="form-control" name="sex">
                <option value="Male" selected>MALE</option>
                <option value="Female">FEMALE</option>
              </select>
            </div>
          </div>
          <div class="form-group">
           
            <div class="col-md-10">
            <label for="Age" class="control-label">Age</label>
              <input type="number" name="Age" class="form-control" placeholder="Age" required/>
            </div>
          </div>
          <div class="form-group">
            
            <div class="col-md-10">
            <label for="Birthday" class="control-label">Birthday</label>
              <input type="date" name="Birthday" class="form-control" placeholder="Birthday" required/>
            </div>
          </div>
          <div class="form-group">
           
            <div class="col-md-10">
            <label for="Spayed" class="control-label">Spayed or Neutered</label><br />
              <input type="radio" name="Spayed" value="Yes" checked>Yes<input type="radio" name="Spayed" value="No" >No
            </div>
          </div>
          <div class="form-group">
            
            <div class="col-md-10">
            <label for="Microchip" class="control-label">Microchip</label><br />
              <input type="radio" name="Microchip" value="Yes" checked>Yes<input type="radio" name="Microchip" value="No" >No
            </div>
          </div>
          <div class="form-group">
            
            <div class="col-md-10">
            <label for="Weight" class="control-label">Weight(Approximate)</label>
              <input type="text" name="Weight" class="form-control" placeholder="Weight" required/>
            </div>
          </div>
          <div class="form-group">
            
            <div class="col-md-10">
            <label for="Colour" class="control-label">Colour/Markings</label>
              <input type="text" name="Colour" class="form-control" placeholder="Colour/Markings" required/>
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