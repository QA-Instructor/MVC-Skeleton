<?php

include_once __DIR__ . '/../models/subscriber.php';

class subscriberController {
    
    public $subscriber; 
    
    public function addSubscriber() {
        if(isset($_POST['subscribe'])) {
       $subscriber = subscriber::addSubscriber($_POST['subscriber_name'], $_POST['subscriber_email']);
        }
    }
}
?>

<html>
<script>
function subscriberAlert() {
    alert ("Whoop! You're on our list!")
}

function subscriberExists() {
    alert ("You're already on our list!")
}
</script>
</html>
