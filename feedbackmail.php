<?php

include "config.php"; 
		if($_SERVER['REQUEST_METHOD'] == "POST"	){
		$message = '<html><body>';
		//$message .= '<img src="http://css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />';
		$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
		$message .= "<tr style='background: #eee;'><td><strong>MY Name:</strong> </td><td>" . strip_tags($_POST['MYName']) . "</td></tr>";
		$message .= "<tr style='background: #eee;'><td><strong>My Email:</strong> </td><td>" . strip_tags($_POST['MyEmail']) . "</td></tr>";
		$message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['Phone']) . "</td></tr>";
		$message .= "<tr><td><strong>Comments:</strong> </td><td>" . strip_tags($_POST['Comments']) . "</td></tr>";
		$message .= "</table>";
		$message .= "</body></html>";
	
	        //   CHANGE THE BELOW VARIABLES TO YOUR NEEDS
             
		//$to = 'akbarmd1202@gmail.com';
			
		$subject = 'Feedback Form';
			
		$headers = "From:" . $mail_sent . " \r\n";
		$headers .= "Reply-To:" . $mail_sent . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        if (mail($mail_sent, $subject, $message, $headers)) {
              //echo 'Your message has been sent.';
		}else {
              //echo 'There was a problem sending the email.';
        }
		//echo  $message;
	}else{
		echo "<script> document.location='Booking.php'</script>";
		exit;
	}
            
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
        <h3 class="panel-title">Feedback form</h3>
      </div>
      <div class="panel-body">
        <h4>Done</h4>
        <p>Thank you for Showing Interest</p>
      </div>
    </div>
  </div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="Scripts/jquery-1.9.1.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="Scripts/bootstrap.min.js"></script>
</body>
</html>