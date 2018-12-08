<?php
 
 //session start
	session_start();

?>

<!DOCTYPE html>

<html>

    <head>
        <meta charset = "utf-8">
        <title>
            my_contacts
        </title>

        <link rel = "stylesheet" href = "style.css">
    </head>


<body>


	<div class = "top">

    	<div class = "cen">
            <ul>
                 <li> <a href = "version.php"> Home </a> </li>
                 <li> <a href = "contact_info.php"> Contact </a> </li>

            </ul>

        </div>

        <div class = "logout"> 
              
               <ul>
                    <li> <a href = "log_out.php"> LogOut </a> </li>
               </ul>
        </div>

    </div>


<?php

	require 'db_connect.php';
    
  
    	$user_id = $_SESSION['user_id'];

		$sql = "select * from contact_info where user_id = '$user_id'";
		$result = mysqli_query($connection,$sql);

		if($result)
		{
			if(mysqli_num_rows($result)==0)
			{
				echo "contact list empty! First add your contacts then try.<br>";
			}
			else 
			{
				while($row=mysqli_fetch_row($result))
				{
					echo "Contact-id: ".$row[1]."<br>";
					echo "			 Name: ".$row[2]."<br>";
					echo "			 District: ".$row[3]."<br>";
					echo "			 E-mail: ".$row[4]."<br>";

					echo "<br>";

				}
			}

		}
    

?>

</body>

</html>





