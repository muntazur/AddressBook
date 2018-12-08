<?php

	require 'db_connect.php';
    
    if(isset($_POST['u_btn']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if($password != $confirm_password)echo "Password Mismatched!<br>";
        else
        {
            $sql = "select * from users where email = '$email'";
            $result = mysqli_query($connection,$sql);
            $row = mysqli_fetch_array($result);

            if($row['email'] == $email)echo "Already have an account.<br>";
            else 
            {
                $sql = "insert into users (name,email,password) values ('$name', '$email','$password')";
                $result = mysqli_query($connection,$sql);
            }


        }
    }

?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>
            LogIn
        </title>

        <link rel = "stylesheet" href = "style.css">
    </head>

    <body>

        <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "post">
            <div class = "login-box">

                <h4> Sign Up </h4>

                <div class = "textbox">
                
                    <input type="text" name="name" placeholder="Full-name...." value="" required>
                </div>

                <div class = "textbox">
                
                    <input type="email" name="email" placeholder="E-mail...." value="" required>
                </div>

                <div class = "textbox">
                
                    <input type="password" name="password" placeholder="password...." value="" required>
                </div>


                <div class = "textbox">
                
                    <input type="password" name="confirm_password" placeholder="confirm-password...." value="" required>
                </div>

                <input class="btn" type="submit" name="u_btn" value = "register">

            </div>

        </form>


    </body>
</html>