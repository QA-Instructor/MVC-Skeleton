<?php
echo "Hello you made it to our display bloggers page, we fixed it!";
foreach ($bloggers as $b) {
    ?>
    <p>
        <?php
        echo $b->blogID.PHP_EOL;
        echo $b->blogName.PHP_EOL;
        echo $b->firstName.PHP_EOL;
        echo $b->lastName.PHP_EOL;
        echo $b->email.PHP_EOL;
        echo $b->phoneNumber.PHP_EOL;
        echo $b->registeredAt.PHP_EOL;
        echo $b->lastLogin.PHP_EOL;
        echo $b->intro.PHP_EOL;
        echo $b->aboutMe.PHP_EOL;
        echo $b->passwordHASH.PHP_EOL;
        
    }
    ?> &nbsp; &nbsp;
<html>
  <!--<a href='?controller=product&action=read&id=<?php // echo $product->id;  ?>'>See product information</a> &nbsp; &nbsp;
  <a href='?controller=product&action=delete&id=<?php // echo $product->id;  ?>'>Delete Product</a> &nbsp; &nbsp;
  <a href='?controller=product&action=update&id=<?php // echo $product->id;  ?>'>Update Product</a> &nbsp;-->
</p>

