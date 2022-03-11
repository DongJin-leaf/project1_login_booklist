<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <title>LOGIN</title>
    </head>
    <body>
        <form method="post" action="check_login.php" class="loginForm">
            <h2>Login</h2>
            <div class="idFrom">
                <input type="text" name="id" class="id" placeholder="Username">    
            </div>
            <div class="passFor">
                <input type="password" name="pw" class="pw" placeholder="Password">
            </div>
            <button type="submit" class="btn" onclick="button()">
                LOGIN
            </button>
            <div class="bottomText">
                <a href="sign_up.php">Sign up</a>
            </div>
        </form>
    </body>
</html>