<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>




<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow ">
    <div class="card-header py-1">

      <h3 class="mx-7 my-4 font-weight-bold text-primary">Special Events

      </h3>

      <p>This section belongs to special events which are <strong> not </strong> under any society or club on campus.</p>
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

    <form action="code.php" method="POST">

        <div class="modal-body">

        <div class="form-group">
            <label> Event ID </label>
            <input type="text" name="eventid" class="form-control" placeholder="Enter Event ID">
        </div>
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
            <div class="form-group">
                <label>Select Today Date</label>
                <input type="date" name="today" class="form-control" placeholder="Select Today Date">
            </div>
        </div>

        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="registerbtn" class="btn btn-primary">Register Event</button>
        </div>
    </form>

    </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>