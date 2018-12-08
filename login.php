
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
                 
            </ul>

          </div>

        </div>

        <form action = "login_handler.php" method = "post">
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