<?php
$pageTitle = 'movies';
include_once('./includes/config.inc.php');
include('./includes/mysql.inc.php');

// Fetch movies from the database
$name = $_GET['name'];

// Use a prepared statement to avoid SQL injection
$query = "SELECT title, movieId FROM movies WHERE title = ?";
$stmt = mysqli_prepare($dbconn, $query);
mysqli_stmt_bind_param($stmt, 's', $name);
mysqli_stmt_execute($stmt);

// Bind the results to variables
mysqli_stmt_bind_result($stmt, $title, $movieId);

// Fetch the result
if (mysqli_stmt_fetch($stmt)) {
    // Use $title and $movieId as needed
    header("Location: giveRating.php?mID=" . $movieId);
} else {
    // Handle the case where no movie with the given title was found
    echo "Movie not found";
}

mysqli_stmt_close($stmt);
?>