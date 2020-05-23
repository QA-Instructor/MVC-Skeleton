<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.


/* require_once 'Classes/Traits.php';
  require_once 'Classes/Interfaces.php';
  require_once 'Classes/Person.php';
  require_once 'Classes/Exceptions/RegisterExceptions.php';



  use Classes\Person;
  use Exceptions\InvalidAgeException;
  use Exceptions\InvalidPostcodeException;
  use Exceptions\InvalidPasswordException;

 */
-->
<?php
include 'models/user.php';
use User\user;
include 'views/css/bootstrap.css';
?> 

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="views/css/bootstrap.css">


    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="views/images/PawsomeLogo.PNG"><img src ="views/images/PawsomeLogo.PNG"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="views/pages/home.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Aww</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Lol</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Wow</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <body>
        <!-- the middle column is for Bootstrap while the second one is for personal design 
        <div class="container-fluid NavBar">
            <div class="container">
                <div class="row justify-content-between"> 
                    <div class="col-md-3"><a href="index.php"> Home </a></div>
                    <div class="col-md-3">Location and Hours</div>
                    <div class="col-md-3">Library Services</div>
                    <div class="col-md-3"><a href="Register.php"> Register </a></div>
                </div> 
            </div>
        </div>
        -->
        
        <form id='register' action='register.php' method='POST'>
            <fieldset>
                <legend>Account Registration Form</legend>
                <div class="form-group">
                    <label for="FirstName">First Name</label><br/>
                    <input type="text" class="form-control" id="firstname" placeholder="Enter first name" required>
                    <small id="firstNameHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="LastName">Last Name</label><br/>
                    <input type="text" class="form-control" id="lastname" placeholder="Enter last name" required>
                    <small id="lastnameHelp" class="form-text text-muted"></small>
                </div>

                <div class="form-group">
                    <label for="Username">Username</label><br/>
                    <input type="text" class="form-control" id="username" placeholder="Enter username" required>
                    <small id="firstNameHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="Email">Email address</label><br/>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="Hashcode">Password</label><br/>
                    <input type="password" class="form-control" id="hashcode" placeholder="Password" required="">
                </div>
                <div class="form-group">
                    <label for="DateJoined">Registration Date</label><br/>
                    <input type="date" class="form-control" id="datejoined" placeholder="Registration Date" required>
                </div>
                </div>
                <div class="form-group">
                    <label for="AboutMe">AboutMe</label><br/>
                    <textarea class="form-control" id="aboutme" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="ProfilePhoto">Profile Photo</label><br/>
                    <input type="file" class="form-control-file" id="profilephoto"><br/>
                    <small id="fileHelp" class="form-text text-muted">Upload a photo that will be associated with your username.</small>
                </div>

            </fieldset>
            <button type="submit" name="formSubmit" class="btn btn-primary">Submit</button> 
            
        </form>
</body>
</html>

<?php

?>
    
