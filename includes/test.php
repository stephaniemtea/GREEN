<!-- Referenced: Checkbox Trickery with CSS:
  http://codersblock.com/blog/checkbox-trickery-with-css/  -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GREEN</title>
	<link href="https://fonts.googleapis.com/css2?family=Barlow&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
	<!-- font awesome (desktop) -->
	<link rel="stylesheet" href="./css/all.css">
	<link rel="stylesheet" href="./css/main.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>

<body>

	<div class="main-container">
		<div class="row">
			<div class="col-sm-8">
				<div id="mainCarousel" class="carousel slide mb-3" data-interval="false" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#mainCarousel" data-slide-to="1"></li>
						<li data-target="#mainCarousel" data-slide-to="2"></li>
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
					<?php 
					require "dbConnect.php";
				// selects random photo of the days 
				$result = mysqli_query($conn, "SELECT * FROM photoOfTheDays ORDER BY RAND() LIMIT 3");
				if (mysqli_num_rows($result) > 0) {
					$output = '';
					$count = 0;
					$postdate = $row['photo_post_date'];
					$postdate = explode('-', $postdate);
					$day = $postdate[2];
					$month = $postdate[1];
					$year = $postdate[0];
					$dateObj = DateTime::createFromFormat('!m', $month);
					$monthName = $dateObj->format('F');
					echo "I am connected";
					echo $monthName;
					echo "<img src='" . $row['photo_url'] . "'/>'";
					while($row = mysqli_fetch_assoc($result)) {
						if($count == 0) {
							$output .= '<div class="carousel-item active">';
						} else {
							$output .= '<div class="carousel-item">';
						}
						$output .= '<img src="' .$row["photo_url"]. '" alt="Photo of the Day (' . $row["photo_artist_username"] . ' - ' . $monthName . ' ' . $day . ', ' . $year . ')" />
										<div class="carousel-caption d-none d-md-block">
											<h3>'. $row["photo_artist_username"] . ' : ' . $monthName . ' ' . $day . ', ' . $year . '</h3>
											<p>' . $row["photo_desc"] . '</p>
										</div>
									</div>';
						$count = $count + 1;
					}
				return $output;
				} else {
					echo "0 results";
				}
				require "dbDisconnect.php";
				?>
					</div> <!-- End of Carousel Content -->
					<!-- Left and right controls -->
					<a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
					<a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
				</div> <!-- End of Carousel -->
			</div> <!-- End of Column 1 -->
		</div> <!-- End of Row 1 -->
	</div> <!-- End of Container -->
</body>

</html>
