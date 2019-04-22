<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body> 
        <?php
        if (isset($ex)) {
            echo "<p>" . $ex->getMessage() . "</p>";
        }
        ?>
        
<div class="login-container">  
        <h2>Login</h2>    
    <form id="loginForm" name="loginForm" action="?controller=user&action=login" method="post"> 
        <div class="login-text-username">Username:</div>
        <input class="w3-input" id="login-input" type="text" name="username" autofocus required> <br>
        <div class="login-text-password">Password:</div> <div class="forgot-password">Forgot password?</div>
        <input class="w3-input" id="login-input" type="text" name="password" required>
        <div class="remember-me">
        <input type="checkbox" checked="checked" name="remember"> Remember me</div>
        <button type="submit">SUBMIT</button> <br>
        <a href="?controller=user&action=registration" class='dont-have-account-register'> Don't have an account?<br>Register</a>
 
        </form>
            </div>  
    </body>
</html>