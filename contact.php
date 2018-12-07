<?php
  
  // start the session
  session_start();
 
?>


<?php
    
    require 'db_connect.php';

	$user_id = $_SESSION['user_id'];
	echo "user id = " . $user_id ."<br>";

	$name = "Md Imran hosein";
	$district = "Thakurgao";
	$email = "imran@gmail.com";
	$phone_number = "01764968900";


	
    $sql = "select * from contact_info where email = '$email'";
	$result = mysqli_query($connection,$sql);
    
    if($result)
    {
    	$numOfRow = mysqli_num_rows($result);
    	if($numOfRow!=0)
    	{
    		echo "The contact already exists. Try new one.<br>";
    	}
    	else
    	{
    		$sql = "insert into contact_info (user_id,name,district,email,phone) values ('$user_id','$name','$district','$email','$phone_number')";
    		$result=mysqli_query($connection,$sql);
    		if($result)
    		{
    			echo " A new contact added<br>";
    		}
    		else mysqli_error($connection);
    
    	}
    }


?>