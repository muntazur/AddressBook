<?php

	require 'db_connect.php';
    
    $name = "Md Muntazur Rahman";
    $email = "muntaz.servant.creator@gmail.com";
    $pasw = "123456";



    $sql = "select email from users where email = '$email'";
    $result = mysqli_query($connection,$sql);


    if($result)
    {   
    	$existCounter=mysqli_num_rows($result);
    	echo $existCounter."<br>";
    	if($existCounter==0)
    	{
    		$sql = "insert into users (name,email,password) values ('$name','$email','$pasw')";
    		mysqli_query($connection,$sql);
    	}
    	else
    	{
    		echo "User already exists<br>";
    	}
    }
    else 
    	echo mysqli_error($connection);

?>