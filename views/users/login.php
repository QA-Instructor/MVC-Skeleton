<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>      
    <form id="loginForm" name="loginForm" action=" " onsubmit="return checkPassword()" method="post">
        <input type="text" name="username" placeholder="Username" autofocus required> <br>
        <input type="text" name="password" placeholder="Password" required> <br>
        <button type="submit">Login</button> <br>
        <input type="checkbox" checked="checked" name="remember"> Remember me
        </form>
    </body>
</html>