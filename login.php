<?php
    $pageTitle = 'Login';
    require ('./includes/config.inc.php');
    include ('./includes/mysql.inc.php');
    require ('./header.html');
    
    $fetched_email = $fetched_password = $email = $password = ''; // declare variables
    $loginErrors= array();  // array to store errors 


    // when the user submits the form:
    if (isset($_POST['submit'])) {
     
        // check if email is not empty and is in correct format
        if (empty($_POST['email'])) {  
            $loginErrors['emptyEmail'] = 'Please enter your email address';  
        } else {
            $email = $_POST['email'];
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {    
            $loginErrors['invalidEmail'] = 'Invalid email address';
           }
        }
           
        // check if password is not empty
        if (empty($_POST['password'])) {
            $loginErrors['emptyPassword'] = 'Please enter your password'; 
        } else {
            $password = $_POST['password'];
            }
        // if there are no errors
    if (empty($loginErrors)) {
        // make query and fetch data from database
        $query = "SELECT email, pass, userId FROM users 
                  WHERE email = '$email' AND pass = '$password'";  
        $fetchQuery = mysqli_query($dbconn, $query);
        $results = mysqli_fetch_array($fetchQuery, MYSQLI_NUM) ;
        
        // store the fetched email and password from the database
        if(!empty($results)){
        $fetched_email = $results[0];
        $fetched_password = $results[1];
        $fetched_userID = $results[2];
        }
        
        // if data does not match:
            if ($fetched_email != $email) {
                $loginErrors['incorrectEmailorPassword'] = 'Your email or password is incorrect<br>';
                
            }
            
            
        } else {
            $loginErrors['userNoFound'] = 'User not found';
        }
        
    }    
    
    if(isset($_POST['submit'])){
        if (!empty($loginErrors)){
            echo '<div class="alert alert-lg alert-danger text-center my-5 ">';
            foreach ($loginErrors as $key => $value) {
                print $value . '<br>' ;
            }
                echo '</div>'  ;  // end of div .alert 
        } else {
        // echo '<div class="alert alert-lg alert-success fw-bolder text-center my-5 "> login successful!';
        $_SESSION['loggedIn'] = 'customer';
        $_SESSION['userId'] = $fetched_userID;
        $_SESSION['username'] = $fetched_email;
        echo ('<h1 class="alert alert-info">Welcome Back ' . $fetched_email .' !<a class="d-inline btn btn-lg btn-dark shadow text-warning m-5 " href="movies.php"> Go To Movies</a></h1>');
        }
    }
    ?>


<div class="d-flex justify-content-center align-items-center vh-100 m-5">
    <main class="rounded rounded-3 bg-dark text-center  " style="width: 100%;max-width:330px;padding: 15px;margin: auto;">
    <form class="" method="POST" action="login.php" autocomplete="on">    
        <h1 class="h3  fw-normal text-white my-5 ">Please Login</h1>

        <div class="my-4 form-floating">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
        </div>
        <div class="my-4 form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
        </div>

        <input class="w-100 btn btn-lg btn-primary" type="submit" name="submit" value="Login">
        <p class="mt-5 mb-3 text-muted">© movieSplash</p>
    </form>
    </main>
</div>

<?php
    include './includes/footer.html';
?>
