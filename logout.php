<?php

include 'includes/configuration.php';

if(isset($_COOKIE['userid'])) {

    // Expire the cookie
    unset($_COOKIE['userid']);
    setcookie("userid", null, -1, "/");
}

// When the cookies have been cleared go back to the home page
redirect("index.php");

?>