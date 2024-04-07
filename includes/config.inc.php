<?php 

if(!defined('LIVE')) define('LIVE', false);

// create a constant contact email to send error messages
define('CONTACT_EMAIL', 'contact@movieSplash.com');

// create constant directories
define('BASE_URI', 'c:\xampp\htdocs\Movie-Recommendation-System');
define('BASE_URL', 'localhost/Movie-Recommendation-System');
define('MYSQL', BASE_URI . 'mysql.inc.php');

// start session
session_start();

// ======================================= Error handler ========================================== //

// // create a function to handle errors
// function my_error_handler($e_number, $e_message, $e_file, $e_line, $e_vars){

//     // create error message
//     $message = "an error occured in script ' $e_file ' on line ' $e_line ':\n$e_message\n";
//     $message .= "<pre>" . print_r(debug_backtrace(), 1) . "</pre>\n";
//     $message .= "<pre>" . print_r($e_vars, 1) . "</pre>\n";

//     if(!LIVE){ // if the site is not live, show the error message in the browser 
//         echo ' <div class="alert alert-danger">' . nl2br($message) . '</div>'; //nl2br inserts a linebreak

//     } else { // if the site is live
//         // send the error message to the contact email
//         error_log($message, 1, CONTACT_EMAIL, 'From:admin@tarik.com');

//         // Only print an error message in the browser, if the error isn't a notice error (minor errors which do not stop exe.):
//         if($e_number != E_NOTICE) { 
//             echo '<div class="alert alert-danger">Oops!. A system error occured. We apologise for the inconvenience.</div>';
//         }
//     } // end of if-else (!LIVE)
//     return true;
// } // end of function my_error_handler

// // use the default php error handler incase the user defined error handler is not invoked
// set_error_handler('my_error_handler');

// // ======================================= End of error handler ==================================== //