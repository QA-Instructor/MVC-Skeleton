<!DOCTYPE html>
<header>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<style>
    body,h1,h2,h3,h4,h5 {font-family: 'Montserrat', sans-serif;
    }
    h1{
        text-height: 30px;
    }
    .logo{
        width: 20%;
    }
    h3{
        text-align: centre; 
    }
    /*    .post{
            text-align: left; 
        }*/

    body, html {
        height: 200%;
        text-align: centre;
    }

    .newPost{
        text-align: centre;
    }

    h1 {
        text-align: centre;
        padding:40px;
        color: white;
        padding-top: 60px;
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
        background-image: url("http://localhost/MVC-Skeleton/views/images/HCH_1711.jpg");

        min-height: 900px;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }

    /* Add styles to the form container */
    .container{
        position: absolute;
        right: 0;
        margin: 20px;
        max-width: 300px;
        width: 25%;
        padding: 12px;
        background-color: white;
        opacity: 0.9;
        text-align: left;
    }

    /* Full-width input fields */
    input[type=text], input[type=password] {
        width: 20%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus, input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }
    /*the container must be positioned relative:*/
    
    content {font-family: 'Montserrat', sans-serif;}
    
.categoryID {
  position: relative;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.categoryID-selected {
  background-color: DodgerBlue;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #00A896;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.categoryID {
  position: absolute;
  background-color: #00A896;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.categoryID:hover, .same-as-selected {
  background-color: #00A896;
}
    .button {
    .categoryID {
        position: relative;
    }

    .custom-select select {
        display: none; /*hide original SELECT element:*/
    }

    .categoryID-selected {
        background-color: #00A896;
    }

    /*style the arrow inside the select element:*/
    .select-selected:after {
        position: absolute;
        content: "";
        top: 14px;
        right: 10px;
        width: 0;
        height: 0;
        border: 6px solid transparent;
        border-color: #fff transparent transparent transparent;
    }

    /*point the arrow upwards when the select box is open (active):*/
    .select-selected.select-arrow-active:after {
        border-color: transparent transparent #fff transparent;
        top: 7px;
    }

    /*style the items (options), including the selected item:*/
    .select-items div,.select-selected {
        color: #00A896;
        padding: 8px 16px;
        border: 1px solid transparent;
        border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
        cursor: pointer;
        user-select: none;
    }

    /*style items (options):*/
    .categoryID {
        position: absolute;
        background-color: #02C39A;
        top: 100%;
        left: 0;
        right: 0;
        z-index: 99;
    }

    /*hide the items when the select box is closed:*/
    .select-hide {
        display: none;
    }

    .categoryID:hover, .same-as-selected {
        background-color: #02C39A;
    }
    .button {
        background-color: #0F0F3BD;
        color: white;
        padding: 15px 12px;
        border: none;
        cursor: pointer;
        width: 30%;
        opacity: 0.8;
    }

    .button:hover {
        opacity: 5;
        background-color: #F0F3BD; 
    }

    /* Set a style for the submit button */
    .postButton {
        background-color: #F0F3BD;
        color: black;
        padding: 15px 12px;
        border: none;
        cursor: pointer;
        width: 30%;
        opacity: 0.9;
    }

    .postButton:hover {
        opacity: 5;
        background-color: #F0F3BD; 
    } 
</style>
<body>
    <div class="bg-img">
    <div class="newPost">
            <h1>Create New ADVNTR post</h1>
        </div>
        <h3>Please fill in boxes below to upload post onto your blog:</h3>
        <!--            <h2 class="login">Login</h2>
        
                    <label for="email"><b>Blog Name</b></label>-->

        <div class="container">

            <label>Title</label>
            <input class="input" type="text" name="title" required autofocus><br>
            <label for="content">Content</label><br>
            <textarea id="content" name="content" rows="10" cols="40" required></textarea><br><br>
            <label for="categoryID">Choose a category:</label>
            <select name="categoryID" id="category">
                <option value="1">Canyoning</option>
                <option value="2">Climbing</option>
                <option value="3">Hiking</option>
                <option value="4">Wild Swimming</option>
                <option value="5">Fell Running</option>
                <option value="6">Kayaking</option>
                <option value="7">Cycling</option>
                <option value="8">Fishing</option>
                <option value="9">Coasteering</option>
                <option value="10">Camping</option>
                <option value="11">Family</option>
            </select><br>
            <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
            <input type="file" name="myUploader" class="button" required><br>
            <input class="postButton" type="submit" value="Add Post">

       </div> 
    </div>
</body>
<!--<style>
    /*h1.hidden {
      visibility: hidden;
    }*/
</style>-->
<script>
    function show(shown, hidden) {
        document.getElementById(shown).style.display = 'block';
        document.getElementById(hidden).style.display = 'none';
        return false;
    }
</script>
