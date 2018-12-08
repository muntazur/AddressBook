<?php
 
 //session start
	session_start();

?>

<?php

	require 'db_connect.php';
    
    if(isset($_POST['u_btn']))
    {

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
    }

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

        <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "post">
            <div class = "login-box">

                <input class="btn" type="submit" name="u_btn" value = "All contacts">

            </div>

        </form>

    </body>

</html>