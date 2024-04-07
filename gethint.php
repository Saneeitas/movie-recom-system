<?php


$pageTitle = 'movies';
include_once ('./includes/config.inc.php');
include ('./includes/mysql.inc.php');
   
// Fetch movies from the database
$moviesQuery = 'SELECT title, movieId FROM movies';
$fetchQuery = mysqli_query($dbconn, $moviesQuery);
$movies = mysqli_fetch_all($fetchQuery, MYSQLI_ASSOC);
 
$a[] = '';



// put movies titles in $a[]
foreach ($movies as $key => $value) {
   $a[] = $value['title'];
}


// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint =  '<a href="#" class="text-decoration-none text-danger ">' .  $name . '</a></br>';
      } else {
        $hint .= '<a href="getSearchedMovie.php?name='.$name.'" class="text-decoration-none text-danger ">' .  $name . '</a></br>';
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>