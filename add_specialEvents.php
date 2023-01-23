<?php

include('dbconfig.php');

if(isset($_POST['posting']))
{
    $caption = $_POST['caption'];

    $inviteLink = $_POST['invitelink'];

    $event_date = $_POST['eventdate'];

    $event_time = $_POST['eventtime'];
     
    $posting_date = date("Y-m-d");

    $sql_query = "INSERT INTO special_events (Caption, Event_Time, Event_Date, Invite_Link, Date_Upload)VALUES('$caption', '$event_time', '$event_date', '$inviteLink', '$posting_date')";

    $stmt = $connection->prepare($sql_query);

    if($stmt->execute())
    {
        header("location: specialevents.php?success_message= Special Event Successfully updated");

        exit;
    }
    else
    {
        header("location: specialevents.php?error_message=Error Occurred, try again - ERROR #008");

        exit;
    }
}
else
{
    header("location: specialevents.php?error_message=Error Occurred, try again2 - ERROR #009");

    exit;
}

?>