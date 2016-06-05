<?php 
session_start();

$_SESSION['DogName'] = $_POST['DogName'];
$_SESSION['Breed'] = $_POST['Breed'];
$_SESSION['sex'] = $_POST['sex'];
$_SESSION['Age'] = $_POST['Age'];
$_SESSION['Birthday'] = $_POST['Birthday'];
$_SESSION['Spayed'] = $_POST['Spayed'];
$_SESSION['Microchip'] = $_POST['Microchip'];
$_SESSION['Weight'] = $_POST['Weight'];
$_SESSION['Colour'] = $_POST['Colour'];

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
        <h4>Day Care & OVernight Stay </h4>
          <form method="post" action="DoneEnrolment.php">
          <div class="form-group">
            
            <div class="col-md-10">
            <label for="Which" class="control-label">Which of these characterstics would best describe your dog? </label><br />
              <input type="checkbox" name="Sociable"> Sociable<br />
              <input type="checkbox" name="Friendly"> Friendly<br />
              <input type="checkbox" name="Shy"> Shy<br />
              <input type="checkbox" name="Timid"> Timid<br />
              <input type="checkbox" name="Anxious"> Anxious<br />
              <input type="checkbox" name="Independent"> Independent<br />
              <input type="checkbox" name="Territorial"> Territorial<br />
              <input type="checkbox" name="Mild-Aggressive"> Mild Aggressive<br />
              <input type="text" name="Other" class="form-control" placeholder="Other" >
            </div>
          </div>
          <div class="form-group">
            
            <div class="col-md-10">
            <label for="Does" class="control-label">Does Your Dog Any </label><br />
              <input type="checkbox" name="allergies"> Allergies<br />
              <input type="checkbox" name="Food-Allergies">Food Allergies<br />
              <input type="checkbox" name="Physical-Medical"> Physical or Medical problems in the past or present<br />
             </div>
          </div>
          <div class="form-group">
            
            <div class="col-md-10">
            <label for="Explain" class="control-label">If yes, Explain</label>
              <input type="text" name="Explain" class="form-control" placeholder="Expalnation" />
            </div>
          </div>
          <div class="form-group">
            
            <div class="col-md-10">
            <label for="treat" class="control-label">Is Your Dog Allowed treat? </label><br />
              <input type="radio" name="treat" value="Yes"> Yes<input type="radio" name="treat" value="No"> No
             </div>
          </div>
          <div class="form-group">
            
            <div class="col-md-10">
            <label for="information" class="control-label">Please State any other information we should know about YOur Dog</label>
              <input type="text" name="information" class="form-control" placeholder="information" />
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