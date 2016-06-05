<?php 

include "config.php";
session_start();


if($_SERVER['REQUEST_METHOD'] == "POST"	){
		$message = '<html><body>';
		//$message .= '<img src="http://css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />';
		$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
		
		$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $_SESSION['Name'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>StreetAddress:</strong> </td><td>" . $_SESSION['StreetAddress'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>City:</strong> </td><td>" . $_SESSION['City'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>PostalCode:</strong> </td><td>" . $_SESSION['PostalCode'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>Phone:</strong> </td><td>" . $_SESSION['Phone'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>WorkPhone:</strong> </td><td>" . $_SESSION['WorkPhone'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>Email:</strong> </td><td>" . $_SESSION['Email'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>GuardianName:</strong> </td><td>" . $_SESSION['GuardianName'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>Guardian2PHone:</strong> </td><td>" . $_SESSION['Guardian2PHone'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>Veterinarian Name:</strong> </td><td>" . $_SESSION['VeterinarianName'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>ClinicName:</strong> </td><td>" . $_SESSION['clinicName'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>Date of last DPH inoculation(Distemper, Hepatitis, Parvovirus):</strong> </td><td>" . $_SESSION['DateDPH'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>Date of last kennel cough:</strong> </td><td>" . $_SESSION['DateCough'] . "</td></tr>";
		
		
		$message .= "<tr style='background: #eee;'><td><strong>DogName:</strong> </td><td>" . $_SESSION['DogName'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>Breed:</strong> </td><td>" . $_SESSION['Breed'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>Sex:</strong> </td><td>" . $_SESSION['sex'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>Birth Date:</strong> </td><td>" . $_SESSION['Birthday'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>Color:</strong> </td><td>" . $_SESSION['Colour'] . "</td></tr>";
		
		
		$message .= "<tr style='background: #eee;'><td><strong>Spayed or Neutered:</strong> </td><td>" . $_SESSION['Spayed'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>Microchip:</strong> </td><td>" . $_SESSION['Microchip'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>Weight(Approximate):</strong> </td><td>" . $_SESSION['Weight'] . "</td></tr>";
		
		
		$message .= "<tr style='background: #eee;'><td><strong>Sociable:</strong> </td><td>" . $_POST['Sociable'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>Friendly:</strong> </td><td>" . $_POST['Friendly'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>Shy:</strong> </td><td>" . $_POST['Shy'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>Timid:</strong> </td><td>" . $_POST['Timid'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>Anxious:</strong> </td><td>" . $_POST['Anxious'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>Independent:</strong> </td><td>" . $_POST['Independent'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>Territorial:</strong> </td><td>" . $_POST['Territorial'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>Mild-Aggressive:</strong> </td><td>" . $_POST['Mild-Aggressive'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>Other:</strong> </td><td>" . $_POST['Other'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>Allergies:</strong> </td><td>" . $_POST['allergies'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>Food-Allergies:</strong> </td><td>" . $_POST['Food-Allergies'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>Physical-Medical:</strong> </td><td>" . $_POST['Physical-Medical'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>Explain:</strong> </td><td>" . $_POST['Explain'] . "</td></tr>";
		
		$message .= "<tr style='background: #eee;'><td><strong>Is Your Dog Allowed treat?:</strong> </td><td>" . $_POST['treat'] . "</td></tr>";
		
		$message .= "</table>";
		$message .= "</body></html>";
	
	        //   CHANGE THE BELOW VARIABLES TO YOUR NEEDS
             
		//$to = 'akbarmd1202@gmail.com';
			
		$subject = 'EnrolmentForm';
			
		$headers = "From: " . $mail_sent . " \r\n";
		$headers .= "Reply-To:" . $mail_sent. " \r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        if (mail($mail_sent, $subject, $message, $headers)) {
              //echo 'Your message has been sent.';
		}else {
              echo 'There was a problem sending the email.';
        }
		//echo  $message;
	}else{
		echo "<script> document.location='Step1Enrolment.php'</script>";
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
        <h3 class="panel-title">Enrolment form</h3>
      </div>
      <div class="panel-body">
        <h4>Done</h4>
        <p>Thank you for enrolling</p>
      </div>
    </div>
  </div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="Scripts/jquery-1.9.1.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="Scripts/bootstrap.min.js"></script>
</body>
</html>