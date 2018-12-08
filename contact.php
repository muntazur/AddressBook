<?php
  
  // start the session
  session_start();
 
?>


<?php
    
    require 'db_connect.php';

    if(isset($_POST['u_btn']))
    {
        $user_id = $_SESSION['user_id'];
        $name = $_POST['name'];
        $district = $_POST['district'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        
        // redundancy checking
        $sql = "select * from contact_info where email = '$email'";
        $result = mysqli_query($connection,$sql);
        $row = mysqli_fetch_array($result);

        if($row['email']==$email)echo "This contact already exists.<br>";
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



<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>
            contacts
        </title>

        <link rel = "stylesheet" href = "style.css">
    </head>

    <body>

        <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "post">
            <div class = "login-box">

                <h4> Add a new contact </h4>

                <div class = "textbox">
                
                    <input type="text" name="name" placeholder="Full-name...." value="" required>
                </div>

                <div class = "textbox">
                
                    <input type="text" name="district" placeholder="District...." value="" required>
                </div>

                <div class = "textbox">
                
                    <input type="email" name="email" placeholder="E-mail...." value="" required>
                </div>


                <div class = "textbox">
                
                    <input type="text" name="phone_number" placeholder="phone...." value="" required>
                </div>

                <input class="btn" type="submit" name="u_btn" value = "Add">

            </div>

        </form>


    </body>
</html>