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

                include 'index.php';
            }


        }
    }

?>
