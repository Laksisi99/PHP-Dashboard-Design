<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>


<?php if(isset($_GET['error_message'])){ ?>

<?php

$message = $_GET['error_message'];

echo"<body onload='notification_function(`Error Message`, `$message`, `#da1857`);'</body>"

?>

<?php }?>

<?php if(isset($_GET['success_message'])){ ?>

<?php

$message = $_GET['success_message'];

echo"<body onload='notification_function(`Success Message`, `$message`, `#0F73FA`);'</body>"

?>

<?php }?>

<link rel="stylesheet" href="notifast/notifast.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow ">
    <div class="card-header py-1">

      <h3 class="mx-7 my-4 font-weight-bold text-primary">Special Events

      </h3>

      
      <p>Use this Forum to <strong>Register</strong> those events.</p>
    </div>

    <div class="card-body">

      <?php

      if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
        echo '<h3 class="status"> ' . $_SESSION['status'] . ' </h3>';
        unset($_SESSION['status']);
      }

      if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
        echo '<h3 class="bg-danger"> ' . $_SESSION['status'] . ' </h3>';
        unset($_SESSION['status']);
      }

      ?>

    <div class="form-responsive">

    <form action="add_specialEvents.php" method="POST">

        <div class="modal-body">

        <div class="form-group">
            <label>Event Caption</label>
            <input type="text" name="caption" class="form-control" placeholder="Enter Event Caption">
        </div>
        <div class="form-group">
            <label>Invite Link</label>
            <input type="text" name="invitelink" class="form-control" placeholder="Enter Event Invite Link">
        </div>
        <div class="row px-2" >
            <div class="form-group ">
                <label>Event Date</label>
                <input type="date" name="eventdate" class="form-control" placeholder="Select Event Date">
            </div>
            <div class="form-group mx-5">
                <label>Event Time</label>
                <input type="time" name="eventtime" class="form-control" placeholder="Select Event Time">
            </div>
        </div>

        </div>
        <div class="modal-footer">
        <button type="submit" name="posting" class="btn btn-primary">Register Event</button>
        </div>
    </form>

    </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<script src="notifast/notifast.min.js"></script>

<script src="notifast/function.js"></script>

<?php
include('includes/scripts.php');

include('includes/footer.php');
?>