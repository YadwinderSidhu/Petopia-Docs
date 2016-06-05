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
        <h3 class="panel-title">Petopia Vet release</h3>
      </div>
      <div class="panel-body">
        <h4>Dog Info</h4>
        <form method="post" action="termsmail.php">
          <div class="form-group">
            <div class="col-md-10">
              <label for="GuardianName" class="control-label">Name</label>
              <input type="text" minlength="4" name="Name" class="form-control" placeholder="Name" required/>
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
            <label for="Colour" class="control-label">Colour/Markings</label>
              <input type="text" name="Colour" class="form-control" placeholder="Colour/Markings" required/>
            </div>
          </div>
         
             
              
          <div class="form-group">
            
            <div class="col-md-10">
             <hr>
              <h4>Vet Info</h4>
              <hr>
            <label for="EName" class="control-label">Name of your Veterinarian</label>
              <input type="text" minlength="4" name="VeterinarianName" class="form-control" placeholder="Name of your Veterinarian" required/>
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
            <label for="Address" class="control-label">Address</label>
              <input type="text" name="Address" class="form-control" placeholder="Address" required/>
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
            <label for="PetInsurence" class="control-label">Pet Insurence Provider (If applicable)</label>
              <input type="text" name="PetInsurence" class="form-control" placeholder=" Pet Insurence" />
            </div>
          </div>
          <div class="form-group">
            
            <div class="col-md-10">
            <label for="Police" class="control-label">Police</label>
              <input type="text" name="Police" class="form-control" placeholder="Police" required/>
            </div>
          </div>
          <div class="form-group">
          <div class="col-md-10">
          <p style="text-align:justify">In the event that my dogs appears to be ill, injured, or at significant risk of experiencing a medical problem at the start of the service or while in the care of Petopia, I, give permission to Petopia to seek veterinary service from a veterinarian or a veterinary clinic. My Preferred veterinarian or emergency clinic may administer the proper medical attention necessary during which I, or other persons listed below, will be contacted for further approval of additional medical procedures.</p>
          
         <p style="text-align:justify"> If Petopia is unable to get to my preferred veterinarian and/or emergency clinic in a timely fashion, they may take my dogs to veterinarian and/or emergency clinic deemed acceptable by Petopia. I understand that efforts will be made to contact me regarding any treatment, illness, injury, or potential problems as soon as the condition is deemed not life threatening and/or  contact is possible. I agree to allow Petopia to use their best judgement in handling these situations, and I understand that Petopia and its staff assume no responsibility for the actions and decisions of the veterinary staff, the health, or death of my pet(s).</p>
         <p style="text-align:justify"> I will assume full responsibility for the payment and/or reimbursement for any and all veterinary services rendered, including but not limited to diagnosis, treatment, grooming, medical supplies, and boarding. Such payments will be made within 14 days of the initial incident. I further authorize Petopia and my primary veterinarian(s) to share all of the medical records of all my animals with veterinary clinics in an emergency in the interest of providing the best care for my ill or injured animal(s).</p>
         <p style="text-align:justify"> This agreement is valid from the date below and grants permission for further veterninary care without the need for additional authorization each time Petopia cares for one or more of my pet(s). I understand that this agreement applies to each of the pet(s) within Petopia’s care. In signing this contract, I agree that I have the sole authority to make health, medical, and financial decisions regarding the animal(s) that will be scheduled to receive Petopia’s services.</p></div></div>
          
          
          <div class="form-group">
            <div class="col-md-10">
              <label for="Continue" class="control-label"></label>
              <input type="submit" name="Continue" class="btn btn-primary"  value="Submit"/>
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