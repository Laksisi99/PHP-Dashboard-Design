<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "EventsWave";

if (!$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {

	die("failed to connect!");
}