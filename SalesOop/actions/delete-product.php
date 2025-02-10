
<?php   
include "../classes/User.php";

// create an object
    $user = new User;

// call the method
    $user->delete($_POST);

    // this is a comment to test git