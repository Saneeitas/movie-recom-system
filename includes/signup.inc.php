<?php 
$pageTitle = 'Sign Up';
require ('./includes/config.inc.php');
require ('./includes/mysql.inc.php');
require ('./header.html');


if (isset($_POST['submit'])) {  // when the user clicks submit

    // get all the values from the Signup Form

    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    
    $query = "SELECT email, pass FROM users WHERE email = '$email' OR pass = '$pass'";
    $execQuery = mysqli_query($dbconn,$query) or die($mysqli_error($dbconn));
    $results = mysqli_fetch_array($execQuery, MYSQLI_NUM) ;
    if (mysqli_num_rows($execQuery) > 0 ) {
        if ($results[0] == $email) {
            echo ('<h1 class="alert alert-danger">Email Already Exists, Please Try
            Again With A Different One!</h1>');
        } elseif ($results[1] == $pass) {
            echo ('<h1 class="alert alert-danger">Password Already Exists, Please Try
            Again With A Different One!</h1>');
        } else {
            echo ('<h1 class="alert alert-danger">Sorry Something Went Wrong, Please Try Again!</h1>');
        }

    } else {
        
        $query = "INSERT INTO users (name, email, pass)
                        VALUES ('$fullName', '$email' '$pass' )";

        $execQuery = mysqli_query($dbconn,$query) or die($mysqli_error($dbconn));

        echo ('<h1 class="alert alert-info">SignUp Successful ' . $firstName .'<a class="d-inline btn btn-lg btn-dark shadow text-warning m-5 " href="login.php"> Login Here</a></h1>');

        }
}


    

    



?>

