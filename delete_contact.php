
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

        <form action = "contact_delete_handler.php" method = "post">
            <div class = "login-box">

                <h4> Contact Id </h4>

                <div class = "textbox">
                
                    <input type="text" name="id" placeholder="id...." value="" required>
                </div>

                
                <input class="btn" type="submit" name="u_btn" value = "Delete">

            </div>

        </form>


    </body>
</html>

