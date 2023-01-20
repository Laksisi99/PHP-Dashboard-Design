<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="card shadow mb-0">
  <div class="card-header py-3">
   
    <h6 class="ml-6 mt-3  font-weight-bold text-primary">Change Admin Password </h6>
    
  </div>

  <div class="card-body">

    <div class="form-group">
        <label>Current Password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter Current Password">
    </div>
    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" name="confirmpassword" class="form-control" placeholder="Retype Current Password">
    </div>
    <div class="form-group">
        <label>New Password</label>
        <input type="password" name="newpassword" class="form-control" placeholder="Enter New Password">
    </div>

    <a href="register.php" class="btn btn-danger"> Cancel </a>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Change  
    </button>

  </div>
  </div>
</div>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>