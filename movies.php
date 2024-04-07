<?php
    $pageTitle = 'movies';
    include_once ('./includes/config.inc.php');
    include ('./includes/mysql.inc.php');
    require ('./header.html');
       
    // Fetch movies from the database
    $moviesQuery = 'SELECT * FROM movies ORDER BY avg_rating DESC';
    $fetchQuery = mysqli_query($dbconn, $moviesQuery);
    $movies = mysqli_fetch_all($fetchQuery, MYSQLI_ASSOC);
    
   ?> 
   
<div class="container-fluid bg-dark">
    <div class="row justify-content-center ">    
        <?php 
            foreach ($movies as $key => $movie) {
            echo (' 
                <div class="card m-3 col-12 col-sm-12 align-items-center rounded rounded-3 col-md-6 col-lg-4 " style="width: 20rem;">
                    <div class="card-header text-center fw-bolder">
                        ' . $movie['title'] .'
                    </div>
                    <img src="./images/'.$movie['image'] .'" class="card-img-top" width="30" height="400" alt="...">
                    <div class="card-body d-flex flex-column w-100 justify-content-end">
                        <p class="card-text text-center text-light  rounded-pill  bg-dark bg-opacity-50  p-2"> Genre: ' .$movie['genre'].'</p>
                        <a href="giveRating.php?mID='.$movie['movieId'] . '" class="btn btn-primary rounded-pill shadow shadow-lg text-center" >Give Rating</a>
                    </div>
                </div>
            ');}
        ?>
    </div>
</div>

<?php
    include './includes/footer.html';
?>

