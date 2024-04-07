<?php
     require ('./includes/config.inc.php');
     include ('./includes/mysql.inc.php');
     require ('./header.html'); 

if (isset($_SESSION['loggedIn'])) {
	

    if (isset($_POST['submit'])){
		//$_SESSION['enter_rating_id'] is the movie id

		// get the users rating
		$rating = -1;	
		if($_POST['star']=='star-5'){
			$rating = 5;
		}
		else if($_POST['star']=='star-4'){
			$rating = 4;
		}
		else if($_POST['star']=='star-3'){
			$rating = 3;
		}
		else if($_POST['star']=='star-2'){
			$rating = 2;
		}
		else if($_POST['star']=='star-1'){
			$rating = 1;
		}

		
		$userId = $_SESSION["userId"]; // this is the users id
		$movieId = $_SESSION["enter_rating_id"]; // this is the movie id

		
		$sql2 = "INSERT INTO ratings (userId,movieId,rating) VALUES ('$userId','$movieId','$rating')";


		$sql3 = " SELECT no_of_users_rated, avg_rating FROM movies WHERE movieId = '$movieId' "; 
		$result = mysqli_query($dbconn, $sql3);
		$row = mysqli_fetch_array($result);
		$a = $row["no_of_users_rated"];
		$b = $row["avg_rating"];

		$b = ( 1.0*($row["avg_rating"])*($row["no_of_users_rated"]) + $rating)/($row["no_of_users_rated"] + 1.0); 
		$a = $a + 1;

		$sql4 = "UPDATE movies SET no_of_users_rated = '$a',avg_rating	= '$b' WHERE movieId = '$movieId' ";
		$executeResult = mysqli_query($dbconn, $sql4);
		if ($executeResult == TRUE) {
			echo('<h1 class="p-5 m-5 text-center bg-dark text-white">Review Recorded Successfully! <a href="movies.php" class="btn btn-lg btn-success mx-5"> Back to movies</a href="movies.php"> </h1>');
		}
		unset($_SESSION['enter_rating_id']);
	}

}  else { echo ('<h1 class="alert alert-info">You need to login first ! <a class="d-inline btn btn-lg btn-dark shadow text-warning m-5 " href="login.php"> Login Here</a></h1>');
}
?>
