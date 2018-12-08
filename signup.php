
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <title>
            sign up
        </title>

        <link rel = "stylesheet" href = "style.css">
    </head>

    <body>

        <div class = "top">

          <div class = "cen">
            <ul>
                 <li> <a href = "index.php"> Home </a> </li>
            </ul>

          </div>

       </div>

        <form action = "signup_handler.php" method = "post">
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