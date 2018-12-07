<?php
   //start the session
   session_start();
?>

<?php
    

    require 'db_connect.php';
    
    // login parameters
	$email = "muntaz.servant.creator@gmail.com";
	$pasw = "123456";


	//try to match
	$sql = "select * from users where email = '$email' and password = '$pasw'";
	$result = mysqli_query($connection,$sql);
    $counter = mysqli_num_rows($result);

    if($result && $counter != 0)
    {   
    	$row = mysqli_fetch_array($result);

    	echo "ID: ". $row[0]."<br>";
    	echo "Name: ". $row[1]."<br>";
    	echo "E-mail: ". $row[2]."<br>";
    	echo "Password: ". $row[3]."<br>";

        $_SESSION['user_id'] = $row[0];
    }
    else
    	echo "You have to signup before log in.<br>";


     

?>