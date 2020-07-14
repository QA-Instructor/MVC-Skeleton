
<p>Here is a list of all blogs:</p>

<?php foreach($blog as $blog) { ?> <!--this page when you do blog post table this needs to be updated -->
  <p>
  <div  >
      <?php echo $blog->title; ?> &nbsp; &nbsp; 
   
    <a  href='?controller=blog&action=read&id=<?php echo $blog->blogID; ?>'>read more</a> &nbsp; &nbsp;
<!--    <a href='?controller=blog&action=create&id=<?php echo $blog->blogID; ?>'>Post a Blog</a> &nbsp; &nbsp;
    <a href='?controller=blog&action=update&id=<?php echo $blog->blogID; ?>'>Update Blog</a> &nbsp;
      <a href='?controller=blog&action=update&id=<?php echo $blog->blogID; ?>'>Update</a> &nbsp;
    <a href='?controller=blog&action=delete&id=<?php echo $blog->blogID; ?>'>Delete</a> &nbsp;
  </p> -->
<?php } ?>

    
  </div>
