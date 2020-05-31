<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">-->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="views/css/styles.css">
        <title>ADVNTR</title>
    </head>
    <body>
        <header class="topnav">
            <form class="form-inline">
                <style>

                    .topnav {
                        /*                        overflow: hidden;*/
                        background-color: lightgrey;
                        top: 0;
                        left: 0;
                        width: 100%;
                        position: fixed;
                        z-index: 10; 
                    }

                    /* Links - change color on hover */
                    .topnav a:hover {
                        background-color: #ddd;
                        color: #00A896;
                    } 
                    /*                    .topnav input[type=text] {
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
                    
                                        Bootstrap search
                                        .search input[type=text]:focus:not([readonly]) {
                                            border-bottom: 1px solid #f48fb1;
                                            box-shadow: 0 1px 0 0 #f48fb1;
                                        }
                    
                    
                                        @media screen and (max-width: 600px) {
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
                    /*                        .dropdown {
                                                float: left;
                                                overflow: hidden;
                                            }
                    
                                            .dropdown .dropbtn {
                                                font-size: 17px;    
                                                border: none;
                                                outline: none;
                                                color: white;
                                                padding: 14px 16px;
                                                background-color: inherit;
                                                font-family: inherit;
                                                margin: 0;
                                            }
                    
                                            .dropdown-content {
                                                display: none;
                                                position: relative;
                                                background-color: #f9f9f9;
                                                min-width: 160px;
                                                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                                                z-index: 1000;
                                            }
                    
                                            .dropdown-content a {
                                                float: none;
                                                color: black;
                                                padding: 12px 16px;
                                                text-decoration: none;
                                                display: block;
                                                text-align: left;
                                            }
                    
                                            .topnav a:hover, .dropdown:hover .dropbtn {
                                                background-color: #555;
                                                color: white;
                                            }
                    
                                            .dropdown-content a:hover {
                                                background-color: #ddd;
                                                color: black;
                                            }
                    
                                            .dropdown:hover .dropdown-content {
                                                display: block;
                                            }
                    
                                            @media screen and (max-width: 600px) {
                                                .topnav a:not(:first-child), .dropdown .dropbtn {
                                                    display: none;
                                                }
                                                .topnav a.icon {
                                                    float: right;
                                                    display: block;
                                                }
                                            }
                    
                                            @media screen and (max-width: 600px) {
                                                .topnav.responsive {position: relative;}
                                                .topnav.responsive .icon {
                                                    position: relative;
                                                    right: 0;
                                                    top: 0;
                                                }
                                                .topnav.responsive a {
                                                    float: none;
                                                    display: block;
                                                    text-align: left;
                                                }
                                                .topnav.responsive .dropdown {float: none;}
                                                .topnav.responsive .dropdown-content {position: relative;}
                                                .topnav.responsive .dropdown .dropbtn {
                                                    display: block;
                                                    width: 100%;
                                                    text-align: left;
                                                }*/
                    .h3 {
                        position: relative;
                        text-align: centre;
                    }
                </style>
<!--            <i class="fas fa-search" aria-hidden="true"></i>-->

                <div class="menuContainer" onclick="myFunction(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                <style>
                    .menuContainer {
                        display: inline-block;
                        cursor: pointer;
                        left: 5px;
                        padding: 10px;
                    }

                    .bar1, .bar2, .bar3 {
                        width: 35px;
                        height: 3px;
                        background-color: #333;
                        margin: 6px 0;
                        transition: 0.4s;
                    }

                    .change .bar1 {
                        -webkit-transform: rotate(-45deg) translate(-9px, 6px);
                        transform: rotate(-45deg) translate(-9px, 6px);
                    }

                    .change .bar2 {opacity: 0;}

                    .change .bar3 {
                        -webkit-transform: rotate(45deg) translate(-8px, -8px);
                        transform: rotate(45deg) translate(-8px, -8px);
                    }
                </style>
                <script>
                    function myFunction(x) {
                        x.classList.toggle("change");
                    }
                </script>
                <h3><a href='?controller=pages&action=home'>ADVNTR</a></h3>
                <div class="menuList">
                    <a href='?controller=blogger&action=create'>Register</a>
                    <a href='?controller=blogger&action=login'>Login</a>
                    <a href='?controller=blogger&action=logout'>Logout</a>
                    <a href='?controller=blogPost&action=create'>Create new post</a>
                    <a href='?controller=blogPost&action=readAll'>Posts</a>
                    <!--<a href='?controller=blogPostComment&action=create'>Add Comment</a>-->
                    <a href='?controller=blogPost&action=search&category=1'>Popular Posts</a>
                    <p><?php
                    if (isset($_SESSION["blogName"])) {
                    echo $_SESSION['blogName']." ".$_SESSION['lastLogin']; } ?></p>
                </div>
<!--                            <input class="search" type="text" placeholder="Search..." aria-label=Search">
                <li class="fa fa-search"> </li>-->
                <!--                            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>-->


        </header>
        <div class="w3-container w3-pink">
            <?php require_once('routes.php'); ?>
            </<div>

                <body class="footer">
                    <footer >
 <!--     Copyright &COPY; <?//= date('Y'); ?>-->
                    </footer>
            </div>
    </body>
</html>