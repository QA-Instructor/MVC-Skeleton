<!DOCTYPE html>
<?php if(isset($_POST["Username"])){
    session_start();
    $_SESSION["Username"] = $_POST["Username"];
    echo "Wellcome " . $_SESSION["Username"];
}
    else{?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pawsome</title>
        <style type="text/css">
            .highlighted
            {
                background-color: yellow;
            }
            .highlight
            {
                background-color: #fff34d;
                -moz-border-radius: 5px; /* FF1+ */
                -webkit-border-radius: 5px; /* Saf3-4 */
                border-radius: 5px; /* Opera 10.5, IE 9, Saf5, Chrome */
                -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.7); /* FF3.5+ */
                -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.7); /* Saf3.0+, Chrome */
                box-shadow: 0 1px 4px rgba(0, 0, 0, 0.7); /* Opera 10.5+, IE 9.0 */
            }
            .highlight
            {
                padding: 1px 4px;
                margin: 0 -4px;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            function searchAndHighlight(searchTerm, selector) {
                if (searchTerm) {
                    var selector = selector || "#realTimeContents"; //use body as selector if none provided
                    var searchTermRegEx = new RegExp(searchTerm, "ig");
                    var matches = $(selector).text().match(searchTermRegEx);
                    if (matches != null && matches.length > 0) {
                        $('.highlighted').removeClass('highlighted'); //Remove old search highlights 

                        //Remove the previous matches
                        $span = $('#realTimeContents span');
                        $span.replaceWith($span.html());

                        if (searchTerm === "&") {
                            searchTerm = "&amp;";
                            searchTermRegEx = new RegExp(searchTerm, "ig");
                        }
                        $(selector).html($(selector).html().replace(searchTermRegEx, "<span class='match'>" + searchTerm + "</span>"));
                        $('.match:first').addClass('highlighted');

                        var i = 0;

                        $('.next_h').off('click').on('click', function () {
                            i++;

                            if (i >= $('.match').length)
                                i = 0;

                            $('.match').removeClass('highlighted');
                            $('.match').eq(i).addClass('highlighted');
                            $('.ui-mobile-viewport').animate({
                                scrollTop: $('.match').eq(i).offset().top
                            }, 300);
                        });
                        $('.previous_h').off('click').on('click', function () {

                            i--;

                            if (i < 0)
                                i = $('.match').length - 1;

                            $('.match').removeClass('highlighted');
                            $('.match').eq(i).addClass('highlighted');
                            $('.ui-mobile-viewport').animate({
                                scrollTop: $('.match').eq(i).offset().top
                            }, 300);
                        });




                        if ($('.highlighted:first').length) { //if match found, scroll to where the first one appears
                            $(window).scrollTop($('.highlighted:first').position().top);
                        }
                        return true;
                    }
                }
                return false;
            }

            $(document).on('click', '.searchButtonClickText_h', function (event) {

                $(".highlighted").removeClass("highlighted").removeClass("match");
                if (!searchAndHighlight($('.textSearchvalue_h').val())) {
                    alert("No results found");
                }


            });
        </script>

        <!--<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico|Pangolin" >-->
        <!--<link rel="stylesheet" href="views/css/styles.css">-->

        <!--         Bootstrap Flatly Theme 
                <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-mhpbKVUOPCSocLzx2ElRISIORFRwr1ZbO9bAlowgM5kO7hnpRBe+brVj8NNPUiFs" crossorigin="anonymous">
        -->

        <!--        Links to our styling files        -->
        <link href="views/css/_bootswatch.scss" rel="stylesheet" type="text/css"/>
<!--        <link href="views/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
        <link href="views/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="views/css/_variables.scss" rel="stylesheet" type="text/css"/>
        <link href="views/css/styles.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <!--  Navigation Bar  -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href='?controller=blogpost&action=readAll'><img src="views/images/Logo_white_small.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <!--                     <li class="nav-item active">-->
                    <a class="nav-link" href='/MVC-Skeleton'>Home<span class="sr-only">(current)</span></a>        
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='?controller=blogpost&action=readAll'>Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='?controller=blogpost&action=create'>Add Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='?controller=user&action=create'>Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='?controller=blogpost&action=readCategory&categoryID=1'>Aww</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='?controller=blogpost&action=readCategory&categoryID=2'>Lol</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='?controller=blogpost&action=readCategory&categoryID=3'>Wow</a>
                </li>
                <li class="nav-item">              
                    <a class="nav-link" name ="search_text" href='?controller=user&action=search'>Search</a>
                </li>
                <li class="nav-item">              
                <a class="nav-link" href='?controller=user&action=login'>Login</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 textSearchvalue_h" type="text" placeholder="Search" name="text-12" id="text-12" value="" >
                <button class="btn btn-secondary my-2 my-sm-0 searchButtonClickText_h" type="button">Search</button>
                <button class="btn btn-secondary my-2 my-sm-0 next_h" type="button">Next</button>

            </form>

            <!--            <div class="searchContend_h">
                    <div class="ui-grid-c">
                        <div class="ui-block-a">
                            <input name="text-12" id="text-12" value="" type="text" class="textSearchvalue_h" />
                        </div>
                        <div class="ui-block-b">
                            <a href="#" class="searchButtonClickText_h">Search</a>
                        </div>
             <div class="ui-block-c">
                            <a href="#" class="next_h">Next</a>
                        </div>
             
                    </div>-->
            <!--                <div id="realTimeContents"> -->

    </nav>

    
</head>
<body>

    <!--  <header class="w3-container w3-white">
        <a href='/MVC-Skeleton'>Home</a>
              <a href='?controller=product&action=readAll'>Products</a> 
              <a href='?controller=product&action=create'>Add Product</a>
              <a href='?controller=blogpost&action=readAll'>Blogs</a>
              <a href='?controller=blogpost&action=create'>Add Blog</a>
              <a href='?controller=user&action=create'>Register</a>   
    
    </header>-->

    <div>
        <?php require_once('routes.php'); ?>
    </div>
</body>
<div class="col-sm-9 col-md-7 col-lg-5">
    <div class="container-fluid mx-auto">
        <div class="row">
            <div>
                <footer class="my-4 text-center">
                    Copyright &COPY; <?= date('Y'); ?>
                    <!--The other way that we can do this is not just typing the URL in the browser, but embedded in the HTML are what are called anchor tags which are clickable links that have an href, 
                    a Hyper Text Reference, inside that.
                    Each time the user clicks on an anchor tag with an href = value to switch to a new page, the browser makes a connection to the web server and issues a GET request - to GET the contents of the page at the specified URL.
                    The server returns the HTML document to the browser, which formats and displays the document to the user.-->
                </footer>
            </div>
        </div>
    </div>
</div>

<!--</div>-->

</html>


<script>
        $(document).ready(function () {

            load_data();

            function load_data(query)
            {
                $.ajax({
                    url: "user.php",
                    method: "POST", //method type
                    data: {query: query},
                    success: function (data)
                    {
                        $('#result').html(data);
                    }
                });
            }
            $('#search_text').keyup(function () {
                var search = $(this).val();
                if (search != '') //even if there is no search, still load the whole books table.
                {
                    load_data(search);
                } else
                {
                    load_data();
                }
            });
        });
</script>
 <?php }?>