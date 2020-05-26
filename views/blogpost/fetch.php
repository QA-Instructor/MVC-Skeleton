
<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "pets"); //database connection
$output = ''; 

if(isset($_POST["query"])) 
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]); //This function is used to create a legal SQL string that you can use in an SQL statement. 
 //The given string is encoded to an escaped SQL string, taking into account the current character set of the connection.
 //This is good to use and avoids sql injection
 $query = "
  SELECT * FROM blogpost
  WHERE BlogPostName LIKE '%".$search."%'
  OR BlogPostSubName LIKE '%".$search."%' 
  OR BlogPostContent LIKE '%".$search."%' 
 "; //MySQL query with placeholders
}
else
{
 $query = "
  SELECT * FROM blogpost ORDER BY BlogPostName
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Title </th>
     <th>Subtitle</th>
     <th>Blog Post</th>
     <th></th>
     <th></th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))//while the function is fetching the array, display the title, date published, quantity in stock of the page.
 {
  $output .= '
   <tr>
    <td>'.$row["BlogPostName"].'</td>
    <td>'.$row["BlogPostSubName"].'</td>
    <td>'.$row["BlogPostContent"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'BlogPost not found.';
}
