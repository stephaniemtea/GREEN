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
	<link rel="stylesheet" href="/css/all.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>

<body>
	<nav class="navbar navbar-expand-md navbar-dark bg-main-green fixed-top"> 
		<a class="navbar-brand nav-link" href="#">GREEN<span class="sr-only">(current)</span></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent"> 
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"> <a class="nav-link" href="#">Events</a> </li>
				<li class="nav-item"> <a class="nav-link" href="#">Articles</a> </li>
				<li class="nav-item"> <a class="nav-link" href="#">Locator</a> </li>
				<li class="nav-item"> <a class="nav-link" href="#">Rewards</a> </li>
				<li class="nav-item"> <a class="nav-link" href="#">Social</a> </li>
				<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">Account</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownOrder"> <a href="#" class="dropdown-item">Login</a> <a href="#" class="dropdown-item">Register</a> </div>
				</li>
			</ul>
		</div>
	</nav>
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
						<div class="carousel-item active"><img src="https://images.unsplash.com/photo-1515694590185-73647ba02c10?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D" class="d-block w-100 carousel-image" alt="Photo of the Day (Coffee Beans)">
					</div>
						<!-- End of Slide 1 Content -->
						<div class="carousel-item"><img src="https://images.unsplash.com/photo-1571068316344-75bc76f77890?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib" class="d-block w-100 carousel-image" alt="Photo of the Day (Bike)"></div>
						<!-- End of Slide 2 Content -->
						<div class="carousel-item"><img src="https://images.unsplash.com/photo-1566836610827-e2a98b312ec2?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib" class="d-block w-100 carousel-image" alt="Photo of the Day (Houseplants)"></div>
						<!-- End of Slide 3 Content -->
					</div>
					<!-- End of Carousel Content -->
					<!-- Left and right controls -->
					<a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
					<a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
				</div>
				<!-- End of Carousel -->
			</div>
			<!-- End of Column 1 -->
			<div class="col-sm-4">
				<h4 class="page-header"> Daily Tasks </h4>
				<div class='d-flex flex-column align-items-left notes-title'>
					<?php
          require "./includes/dbConnect.php";
          // selects random number of weekly and daily tasks 
          $result = mysqli_query($conn, "SELECT task_name, task_type FROM tasks WHERE task_type='daily' ORDER BY RAND() LIMIT 3");
          if (mysqli_num_rows($result) > 0) {
          	while($row = mysqli_fetch_assoc($result)) {
          		echo "<div class='d-flex'><label><input type='checkbox' class='option-input radio'><span class='label-text'>" . $row['task_name']."</br></span></input></label></div>";
          	}
          } else {
          	echo "0 results";
          }
          echo "</div>";  //End of Daily Tasks Column
          require "./includes/dbDisconnect.php";
          ?>
			<h4 class="page-header"> Weekly Tasks </h4>
			<div class='d-flex flex-column align-items-left notes-title'>
				<?php
				require "./includes/dbConnect.php";
				// selects random number of weekly and daily tasks 
				$result = mysqli_query($conn, "SELECT task_name, task_type FROM tasks WHERE task_type='weekly' ORDER BY RAND() LIMIT 2");
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						echo "<div class='d-flex'><label><input type='checkbox' class='option-input radio'><span class='label-text'>" . $row['task_name']."</br></span></input></label></div>";
					}
				} else {
					echo "0 results";
				}
				echo "</div>"; // End of Weekly Tasks Column
				require "./includes/dbDisconnect.php";
				?> 
			</div> <!-- End of Column 2 -->
		</div> <!-- End of Row 1 -->
		<div class="row">
			<div class="col-md-6 icebreaker>
				<form>
					<div class="form-group">
						<label for="icebreaker">How long was your shower yesterday night or this morning?</label>
						<input type="number" min="1" class="form-control" id="icebreaker">
					</div>
				</form>
			</div> <!-- End of Column -->
		</div> <!-- End of Row 2 -->
	</div> <!-- End of Container -->
</body>

</html>
