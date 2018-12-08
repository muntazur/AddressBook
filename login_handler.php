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
             
             $_SESSION['user_id'] = $row['id'];

             if(isset($_SESSION['user_id']))
             {
                include 'version.php';
             }

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