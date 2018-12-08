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
                
                include 'contact_info.php';
            }
            else mysqli_error($connection);

        }



    }



?>