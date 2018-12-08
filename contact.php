
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

       </div>

        <form action = "add_contact_handler.php" method = "post">
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