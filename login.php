<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset ($_POST["action"]) and $_POST["action"] == "login") {
    processForm(); 
} else {
    displayForm(array(), array(). new User(array()));
}

function displayForm($errorMessages, $missingFields, $user) {
    displayPageHeader("Login to the Pawsome Bloggers Area", true);

if ($errorMessages) {
    foreach ($errorMessages as $errorMessage) {
        echo $errorMessage;
    }
} else {
?>
<p>To access the bloggers area, please enter your username and password below then click Login.</p>;
<?php } ?>
<form action ="login.php" method="POST" style =" margin-bottom: 50px;">
    <div style ="width: 30em;">
        <input type ="hidden" name="action" value="login"/>
        <label for="uisername" 
            <?php validateField("username", $missingFields) 
                ?>> Username</label>
        <input type="text" name="username" id="username" value="
            <?php echo $user->getValueEncoded("username")?>"/>
        <label for="password"
            <?php if ($missingFields) echo ' class = "error"' ?>>Password</label>
        <input type ="password" name="password" id ="password" value=""/>
        <div style="clear: both;">
            <input type="submit" name="submitButton" id="submitButton" value="Login"/>
    </div>
</div>
</form>

<?php 
displayPageFooter();
}

function processForm() {
    $requiredFields = array("username", "password");
    $missingFields = array();
    $errorMessages = array();
    
    $user = new User(array(
        "username" => isset ($_POST["username"] ) ? preg_replace("/[^ \-\_a-zA-Z0-9]/", "", $_POST["username"] ) : "",
        "password" => isset ($_POST["password"] ) ? preg_replace("/[^ \-\_a-zA-Z0-9]/", "", $_POST["password"] ) : "",
   ) );
}
foreach ($requiredFields as $requiredField) {
    if (!$user->getValue($requiredField)){
        $missingFields[] = $requiredField;
    }
}

if ($missingFields) {
    $errorMessages[] = '<p class="error"> There were some missing fields in the form you submitted. Please complete the fields highlighted below and click Login to resend the form. </p>';
} elseif (!loggedInUser = $user->authenticate() ) {
    $errorMessages[] = 
}