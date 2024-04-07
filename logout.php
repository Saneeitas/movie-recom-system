<?php
     $pageTitle = 'Logout';
// This is the logout page for the site.

// Require the configuration before any PHP code as the configuration controls error reporting:
require ('./includes/config.inc.php');
// The config file also starts the session.

// If the user isn't logged in, redirect them:
// redirect_invalid_user();

// Destroy the session:
$_SESSION = array(); // Destroy the variables.
session_destroy(); // Destroy the session itself.
setcookie (session_name(), '', time()-300); // Destroy the cookie.

// Include the header file:
$pageTitle = 'Logout';
include ('./header.html');

// Print a customized message:
echo '<div>
<h3 class="bg-dark fs-1 fw-bold text-white text-center p-5">Logged Out!</h3>
<p class="card-text  fs-3 fw-bold text-center text-success p-3 my-5 py-5">
            Thank you for visiting. You are now logged out. Please come back soon!</p>
       </div>';

// Include the HTML footer:
include ('./includes/footer.html');
?>