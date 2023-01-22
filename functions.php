<?php

function check_login($connection)
{

	if(isset($_SESSION['id']))
	{

		$id = $_SESSION['id'];
		$query = "select * from Admin where Admin_ID = '$id' limit 1";

		$query_run = mysqli_query($connection,$query);
		if($query_run && mysqli_num_rows($query_run) > 0)
		{

			$admin_data = mysqli_fetch_assoc($query_run);
			return $admin_data;
		}
	}

	//redirect to login
	header("Location: login.php");
	die;

}

