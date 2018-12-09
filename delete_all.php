<?php

	//start the session
	session_start();

?>

<?php
		require 'db_connect.php';

		$user_id = $_SESSION['user_id'];

		$sql = "select contact_id from contact_info where user_id = '$user_id'";
		$result = mysqli_query($connection,$sql);
		$row = mysqli_fetch_array($result);

		if(!empty($row['contact_id']))
		{   

			$id = $row['contact_id'];
			$sql = "delete from contact_info where user_id = '$user_id'";
			mysqli_query($connection,$sql);
			include 'contact_info.php';
		}
		else
		{
			// echo "You have no contact available to delete.<br>";
			include 'contact_info.php';
		}


?>