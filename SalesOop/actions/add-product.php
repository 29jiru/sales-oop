
<?php   
include "../classes/User.php";

// create an object
    $user = new User;

// call the method
    $user->addProduct($_POST);
