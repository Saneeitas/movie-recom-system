<?php
	$pageTitle = 'Rate Movie';
     require ('./includes/config.inc.php');
     include ('./includes/mysql.inc.php');
     require ('./header.html');

?>
<style>
        div.stars {
    width: 270px;
    display: inline-block;
    }

    input.star { display: none; }

    label.star {
    float: right;
    padding: 10px;
    font-size: 36px;
    color: #444;
    transition: all .2s;
    }

    input.star:checked ~ label.star:before {
    content: '\02605';
    color: #FD4;
    transition: all .25s;
    }

    input.star-5:checked ~ label.star:before {
    color: #FE7;
    text-shadow: 0 0 20px #952;
    }

    input.star-1:checked ~ label.star:before { color: #F62; }

    label.star:hover { transform: rotate(-15deg) scale(1.3); }

    label.star:before {
    content: '\02606';
	color: beige;
    font-family: FontAwesome;
    }
</style>	
	<?php
		$query_id = $_GET['mID'];
		$_SESSION['enter_rating_id'] = $query_id;

		$moviesQuery = "SELECT * FROM movies WHERE movieId = '$query_id'";
		$fetchQuery = mysqli_query($dbconn, $moviesQuery);
		$movie = mysqli_fetch_all($fetchQuery, MYSQLI_ASSOC);
		unset($_GET['mID']);
		foreach ($movie as $key => $value) {
			echo('
			<div class="p-5 bg-dark">
			<div class="card m-5 bg-dark text-light text-center" ">
				<div class="row g-0 shadow shadow-lg p-5">
					<div class="col-md-4">
					<img src="./images/'.$value['image'] .'" class="card-img-top w-100 h-100"  alt="..."/>				
					</div>
					<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title fs-1">'. $value['title'] .'</h5>
						<p class="card-text">' .$value['genre']. '</p>
						<h3 class="card-text">Rate movie</h3>
						<form action="recordRating.php" method="POST" class="">	
							<div class="stars " style="margin:auto;">
								<input class="star star-5" id="star-5" type="radio" value="star-5" name="star"/>
								<label class="fa fa-star star star-5" for="star-5"></label>
								
								<input class="star star-4" id="star-4" type="radio" value="star-4" name="star"/>
								<label class="fa fa-star star star-4" for="star-4"></label>
								
								<input class="star star-3" id="star-3" type="radio" value="star-3" name="star"/>
								<label class="fa fa-star star star-3" for="star-3"></label>
								
								<input class="star star-2" id="star-2" type="radio" value="star-2" name="star"/>
								<label class="fa fa-star star star-2" for="star-2"></label>
								
								<input class="star star-1" id="star-1" type="radio" value="star-1" name="star"/>
								<label class="fa fa-star star star-1" for="star-1"></label>
								<div class="">
									<input class="btn btn-warning d-block m-auto" type="submit"  name="submit" value="Submit" />
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			</div>
			');
		}

    include './includes/footer.html';
?>