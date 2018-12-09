<?php

	// start the session
	session_start();

?>

<?php

	require 'db_connect.php';

	if(isset($_POST['u_btn']))
	{
		$id = $_POST['id'];
		$user_id = $_SESSION['user_id'];

		$sql = "select contact_id from contact_info where user_id = '$user_id' and contact_id = '$id' ";

		$result = mysqli_query($connection,$sql);
		$row = mysqli_fetch_array($result);

		if($row['contact_id'] == $id)
		{
			$sql = "delete from contact_info where user_id = '$user_id' and contact_id = '$id'";
			mysqli_query($connection,$sql);
			include 'contact_info.php';
		}
		else
		{   
			echo "This contact is not available.";
		}

	}
?>