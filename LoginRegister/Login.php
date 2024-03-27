<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <title>Login page</title>
    </head>
    <body>
        <form id="loginPage" action="loginvalidate.php" method="POST">
            <label for="username">Username / Email Address</label>
            <input type="text" id="username" name="username" required>
            <div id="username-error" style="color: red;"> 
                <h1></h1>
            </div>

            <label for="password">Password</label>
            <input type="text" id="password" name="password" required>
            <div id="password-error" style="color: red;"></div>
        </form>
    </body>
</html>