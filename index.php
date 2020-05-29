<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ADVNTR</title>
    </head>
  
        <?php
    require_once('connection.php');
        
    if (isset($_GET['controller']) && isset($_GET['action'])) {
        $controller = $_GET['controller'];
        $action     = $_GET['action'];
  } else {
        $controller = 'pages';
        $action     = 'home';
  }

    require_once('views/layout.php');
        ?>

    <head>
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        
        <!--Link to the search button-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <div class="topnav">
        <a class ="logo"><b>ADVNTR</b></a>
        <a href="#home">Home</a>
        <a href="#aboutMe">About Me</a>
        <a href="#readPost">Posts</a>
        <!--        <a href="#more">More</a>-->
        <a href="#loginBlogger">Login</a>
        <a href="#logoutBlogger">Logout</a>
        <!-- Search form -->
        <form class="form-inline">
            <i class="fas fa-search" aria-hidden="true"></i>
            <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search..."
                   aria-label="Search">
            <span class="fa fa-search"> </span>
        </form>
    </div>
    <div class="header">
        <h1>THE GREAT ESCAPE</h1>
    </div>

    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h2>7 Things You’ll Learn on your First Canyon Adventure</h2>
                <h5>Canyoning is an adventure and exploration sport where participants climb into a wetsuit and get themselves down a river, gorge or – you guessed it – canyon. It involves using a variety of techniques ranging from walking, jumping and scrambling to abseiling and rock climbing. Canyoning in itself is a bit of a multi-sport adventure.

                    If you’ve not done it before, the whole process can be a little daunting. But the good thing about canyoning is that it can often be as relaxing or as intense and adrenaline-fuelled as you want it to be. There are different routes depending on ability and confidence. Even within the same canyon there are often different options and a variety of ways back down.

                    At it’s best, canyoning isn’t just an adrenaline hit, it’s an inimitable and intimate way to explore and enjoy beautiful natural spaces in a manner that’s otherwise simply not possible.

                    Here are a few things that you’ll learn on your first canyoning trip, with the add-ins of a few epic places and ways to try it out. 
                </h5>
                <div class="img" style="height:200px;">Image</div>

                <p>Some text..</p>
            </div>
            <div class="card">
                <h2>TITLE HEADING</h2>
                <h5>Content, Sep 2, 2017</h5>
                <div class="img"></div>
                <img src= "https://localhost/MVC-Skeleton/views/images/HCH_1772.jpg" alt="image" style="width:100%;">
                <p>Some text..</p>
                <!--                <div class="Comment">-->
                <div class="readMore">
                    <p><button class="button padding white border"><b>READ MORE »</b></button></p>
                </div>
                <div class="small">
                    <p><span class="comment-button"><b>Comments  </b> <span class="tag">0</span></span></p>
                    <!--                    </div>-->
                </div>
            </div>
            <div class="rightcolumn">
                <div class="card">
                    <h2>About Me</h2>
                    <div class="img">
                        <img src= "https://localhost/MVC-Skeleton/views/images/HCH_1772.jpg" alt="image" style="width:100%;">
                    </div>
                    <p>Hi, I'm Victoria and I love canyoning.</p>
                </div>
                <div class="card">
                    <h3>Popular Post</h3>
                    <div class="img">Image</div><br>
                    <div class="img">Image</div><br>
                    <div class="img">Image</div>
                </div>
                <div class="card">
                    <h3>Follow Me</h3>
                    <p>Social Media</p>
                </div>
            </div>
        </div>
        <!--
                <div class="footer">
                    <h2>Home</h2>
                    <div class="logo" style="height:50px;"></div>
                </div> -->
        <style>
            html{box-sizing:border-box}*,*:before,*:after{box-sizing:inherit}

            html{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:5}

            .topnav {
                overflow: hidden;
                background-color: lightgrey;
            }
            .logo{
                
            }
            /* Navbar links */
            .topnav a {
                float: left;
                display: block;
                color: black;
                text-align: center;
                padding: 6px 6px;
                text-decoration: none;
            }

            /* Links - change color on hover */
            .topnav a:hover {
                background-color: #ddd;
                color: #00A896;
            } 
            .topnav input[type=text] {
                padding: 4px;
                margin-top: 4xpx;
                font-size: 17px;
                border: none;
            }

            .topnav .search-container button {
                float: right;
                padding: 6px 6px;
                margin-top: 4px;
                margin-right: 10px;
                background: lightgrey;
                font-size: 17px;
                border: none;
                cursor: pointer;
            }

            /*Bootstrap search*/
            .search input[type=text]:focus:not([readonly]) {
                border-bottom: 1px solid #f48fb1;
                box-shadow: 0 1px 0 0 #f48fb1;
            }


            .topnav .search-container button:hover {
                background: lightgrey;
            }
            .topnav .search-container button:hover {
                background: lightgrey;
            }

            /*                        @media screen and (max-width: 600px) {
                                        .topnav .search-container {
                                            float: none;
                                            .topnav a, .topnav input[type=text], .topnav .search-container button {
                                                float: none;
                                                display: block;
                                                text-align: left;
                                                width: 100%;
                                                margin: 0;
                                                padding: 10px;
                                            }
                                            .topnav input[type=text] {
                                                border: 1px solid #ccc;  
                                            }
                                        }*/
            body {
                font-family: 'Montserrat', sans-serif;
                padding: 10px;
                background: #f1f1f1;
            }

            /* Header/Blog Title */
            .header {
                padding: 30px;
                font-size: 80px;
                text-align: center;
                background: white;
            }

            /* Create two unequal columns that floats next to each other */
            /* Left column */
            .leftcolumn {
                float: left;
                width: 75%;
            }

            /* Right column */
            .rightcolumn {
                float: right;
                width: 20%;
                padding-left: 10px;
            }

            /* image */
            .img {
                /*            display: block;  
                            width: 96%;
                            background-color: #aaa;*/
                padding: 20px;
            }

            /* Add a card effect for articles */
            .card {
                background-color: white;
                padding: 20px;
                margin-top: 20px;
            }

            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;
            }

            /* Footer */
            .footer {
                padding: 20px;
                text-align: center;
                background: #ddd;
                margin-top: 20px;
            }

            /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 800px) {
                .leftcolumn, .rightcolumn {
                    width: 100%;
                    padding: 0;
                }
            }
            .logo{

            }
        </style>
        <!-- Labels / tags -->
        <div class="card">
            <div class="container">
                <h4>Tags</h4>
            </div>
            <div class="container">
                <p><span><a href="#1">Canyoning</a></span>  <span><a href="#2">Climbing</a></span>  <span><a href="#3">Hikes</a></span>
                    <span><a href="#4">Wild Swimming</a></span>  <span><a href="#5">Fell Running</a></span>   <span><a href="#6">Kayaking</a></span>
                    <span><a href="#7">Cycling</a></span>   <span><a href="#8">Fishing</a></span>  <span><a href="#9">Coasteering</a></span>
                    <span><a href="#10">Camping</a></span>  <span><a href="#11">Family Trips</a></span>
                </p>
            </div>
        </div>
</html>