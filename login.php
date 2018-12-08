<?php
   //start the session
   session_start();
?>

<?php
    

    require 'db_connect.php';

    if(isset($_POST["u_btn"])){
    
        // login parameters
	    $email = $_POST['email'];
	    $pasw = $_POST['password'];



	    //trying to match
	    $sql = "select * from users where email = '$email' and password = '$pasw'";
        if($result=mysqli_query($connection,$sql))
        {   
    	   $row = mysqli_fetch_array($result);

           if($row['email'] == $email && $row['password'] == $pasw)
           {
             echo "welcome!<br>";
             $_SESSION['user_id'] = $row['id'];
           }
           else
           {
             echo "Incorrect! E-mail or password.<br>";
           }
    	 

            
         }
        else
    	echo "You have to signup before log in.<br>";

    }

?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <title>
            LogIn
        </title>

        <link rel = "stylesheet" href = "style.css">
    </head>

    <body>

        <div class = "top">

          <div class = "cen">
            <ul>
                 <li> <a href = "index.php"> Home </a> </li>
                 <li> <a href = "#"> Contact </a> </li>

            </ul>

          </div>

        </div>

        <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "post">
            <div class = "login-box">

                <h4> Login </h4>

                <div class = "textbox">
                
                    <input type="email" name="email" placeholder="E-mail" value="" required>
                </div>

                <div class = "textbox">
                
                    <input type="password" name="password" placeholder="password" value="" required>
                </div>

                <input class="btn" type="submit" name="u_btn" value = "sign in">

            </div>

        </form>


    </body>
</html>