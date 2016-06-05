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
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">FeedBack</h3>
    </div>
    <div class="panel-body">
      <div class="col-xs-12 col-sm-12 col-md-12">
<div class="col-xs-8 col-sm-8 col-md-8"><h4 style="color:#16b99d">Contact Petopia</h4>
              <b  style="color:#16b99d">Phone: 04 477 0100</b><br /></div>
              
          
              <img src="http://www.petopia.co.nz/img/petopia_contact.jpg">
      </div>
      Please include your name, dog's name, telephone number and a preferred day,and we'll do our best to accommodate.<br/>
      <form method="post" action="feedbackmail.php">
          <div class="form-group">
            <div class="col-md-10">
              <label for="MYName" class="control-label">MY Name</label>
              <input type="text" minlength="4" name="MYName" class="form-control" placeholder="MY Name" required/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-10">
              <label for="MyEmail" class="control-label">My Email</label>
              <input type="email" name="MyEmail" class="form-control" placeholder="My Email" required/>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-md-10">
              <label for="Phone" class="control-label">My Phone</label>
              <input type='tel' pattern="[0-9]{10,11}" name="Phone" class="form-control" placeholder="Phone" minlength="10" maxlength="11" required/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-10">
              <label for="Comments" class="control-label">Comments</label>
              <textarea name="Comments" class="form-control" placeholder="Type your comment here" ></textarea>
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
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="Scripts/jquery-1.9.1.min.js"></script> 
  <!-- Include all compiled plugins (below), or include individual files as needed --> 
  <script src="Scripts/bootstrap.min.js"></script> 
</div>
</body>
</html>