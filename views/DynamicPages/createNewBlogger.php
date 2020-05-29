<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>

    <style>
        body,h1,h2,h3,h4,h5 {font-family: 'Montserrat', sans-serif;
        }
        .logo{
            width: 20%;
        }
        h1{
            text-align: right; 
            color: white;
        }
        .login{
            text-align: left; 
        }

        body, html {
            height: 200%;
            text-align: centre;
        }

        * {
            box-sizing: border-box;
        }
        /*        .img{
                    image: url("http://localhost/MVC-Skeleton/views/images/logo1.png");
                    min-height: 100px;
                    position: center;
                    repeat: no-repeat;
                    position: absolute;
                }*/

        .bg-img {
            /* The image used */
            background-image: url("http://localhost/MVC-Skeleton/views/images/HCH_1727.jpg");

            min-height: 1200px;
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        /* Add styles to the form container */
        .container {
            position: absolute;
            right: 0;
            margin: 20px;
            max-width: 600px;
            padding: 12px;
            background-color: white;
            opacity: 0.9;
        }

        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Set a style for the submit button */
        .btn {
            background-color: #00A896;
            color: white;
            padding: 15px 12px;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .btn:hover {
            opacity: 5;
        }
    </style>
    <body>
        <div class="bg-img">
            <h1>Join the Advntr team...  </h1>
            <form action="" method="POST" class="container" enctype="multipart/form-data">
                <h2>Register with Advntr</h2>

                <label for="BlogName"><b>Blog Name</b></label>
                <input type="text" placeholder="Enter Blog Name" name="blogName" required>

                <label for="FirstName"><b>First Name</b></label>
                <input type="text" placeholder="Enter First Name" name="firstName" required>

                <label for="LastName"><b>Last Name</b></label>
                <input type="text" placeholder="Enter Last Name" name="lastName" required>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label for="PhoneNumber"><b>Phone Number</b></label>
                <input type="text" placeholder="Enter Phone Number" name="phoneNumber" required>

                <label for="Intro"><b>Intro</b></label>
                <input type="text" placeholder="Enter Intro" name="intro" required>

                <label for="AboutMe"><b>About Me</b></label>
                <input type="text" placeholder="Enter About Me" name="aboutMe" required>

                <label for="Password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <button type="submit" class="btn" value="registerBlogger">Login</button>
            </form>
        </div>

        <p></p>

    </body>
</html>
