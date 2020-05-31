<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900|Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <link href="views/css/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>


        <div class='col-sm-12'></div>

        <!--for items that belong together place into form groups-->
        <form  method="POST" action="">
            <div class="form-group">
                <label><b>Contact Us</b></label>
                <br>
                <label>First Name</label>
                <input name="firstName" type="text" class="form-control" placeholder="Your first name" autofocus="">
            </div>
            <div class="form-group">
                <label>Surname</label>
                <input name="surname" type="text" class="form-control" placeholder="Your second name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input name="email" type="email" class="form-control" placeholder="Your email address">
            </div>
            <div class="form-group">
                <label>Dates</label>
                <input name="date" type="date" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Comments</label>
                <textarea name="body" class="form-control" placeholder="Enter your message"></textarea>
            </div>

            <?php
            //need to add code to be able to link the database 
            ?>

        </select>
    </div>

   <!-- <input name="submit" type="submit" class="btn btn-success" value="Submit" a href="index.php"/> -->
    <a href="index.php" name="submit" type="submit" class="btn btn-outline-success">Submit</a>
    <a href="index.php" name="cancel" type="submit" class="btn btn-outline-success">Go back</a>
</form>
<br>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

