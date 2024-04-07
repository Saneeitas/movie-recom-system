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
    
    $checkquery = "SELECT email, pass FROM users WHERE email = '$email' OR pass = '$pass'";
    $execQuery = mysqli_query($dbconn,$checkquery) or die(mysqli_error($dbconn));
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
        
        $query = "INSERT INTO users (fullName, email, pass)
                        VALUES ('$fullName', '$email', '$pass' )";




        $execQuery = mysqli_query($dbconn,$query) or die($mysqli_error($dbconn));

        echo ('<h1 class="alert alert-info">SignUp Successful ' . $fullName .'<a class="d-inline btn btn-lg btn-dark shadow text-warning m-5 " href="login.php"> Login Here</a></h1>');

        }
}



?>


<div class="d-flex justify-content-center align-items-center vh-100 m-5 ">
    <main class="rounded rounded-3 bg-dark text-center " style="width: 100%;max-width:330px;padding: 15px;margin: auto;">
    <form class="" method="POST" action="signup.php">
        <h1 class="h3  fw-normal text-white mb-5 ">SignUp</h1>

        <div class="my-4 form-floating">
            <input  type="text" name="fullName" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Full name</label>
        </div>
        <div class="my-4 form-floating">
            <input  type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="my-4 form-floating">
            <input  type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <input class="w-100 btn btn-lg btn-primary" type="submit" name="submit" value="Sign Up">
        <p class="mt-5 mb-3 text-muted">© movieSplash</p>
    </form>
    </main>
</div>

<?php
    include './includes/footer.html';
?>
