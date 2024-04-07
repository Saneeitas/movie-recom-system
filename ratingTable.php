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
   
<div class="container m-auto bg-dark">
    <div class="row justify-content-center m-5">    
        <table class="table caption-top table-dark table-striped table-bordered">
        <caption class="text-white fs-3 fw-bolder text-center">All Movie Ratings</caption>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Movie Title</th>
            <th scope="col">Users Rated</th>
            <th scope="col">Average Rating</th>
          </tr>
        </thead>
        <tbody>
        <?php 
        $i = 0;

        foreach ($movies as $key => $movie) {
            $i++;
            echo (' 
                <tr>
                    <th>'.$i.'</th>
                    <td>' . $movie['title'] . '</td>
                    <td>'.$movie['no_of_users_rated'] . '</td>
                    <td>' .$movie['avg_rating'].'</td>
                </tr>'
            );}
        ?>
        <a href="movies.php" class="btn btn-lg btn-success m-5 border border-light" style="max-width:200px "> Back to movies</a href="movies.php">
        </tbody>
        </table>
    </div>
</div>

<?php
    include './includes/footer.html';
?>

