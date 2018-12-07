<?php 
	
	$server = "localhost";
	$username = "root";
	$password = "";
    $db = "address_book";
    
    //connect mysql with server and the expected database
    $connection = mysqli_connect($server,$username,$password,$db);

    //checking connection
    if(!$connection)
    {
    	die("connection failed: ".mysqli_connect_error());
    }
    else echo "Mysql has connected successfully with server and database <br>";
?>