<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
        <!--        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">-->

        <link rel="stylesheet" href ="views/css/loginStyle.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
</head>
<body>

    <h1>Start your Advntr now!</h1>
    <div class="bg-img">
        <form action="" method="POST" class="container" enctype="multipart/form-data">
            <h2>Login</h2>

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
