<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GREEN</title>
	<link href="https://fonts.googleapis.com/css2?family=Barlow&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
	<!-- font awesome & Bootstrap(desktop) -->
	<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
	<link rel="stylesheet" href="/css/all.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
	 crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
	 crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
	 crossorigin="anonymous"></script>
</head>

<<<<<<< HEAD
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-8" style="background-color:lavender;">
		<div id="myCarousel" class="carousel slide mb-3" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="https://images.unsplash.com/photo-1575986767340-5d17ae767ab0?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1491&q=80" class="d-block w-100 carousel-image" alt="Photo of the Day">
              <div class='carousel-caption d-none d-md-block'>
                <h5>$title</h5>
                <p>$content</p>
              </div> 
            </div> <!-- End of Slide 1 Content -->
           </div> <!-- End of Carousel Content -->
          <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div> <!-- End of Carousel -->
    </div> <!-- End of Column 1 -->
	
    <div class="col-sm-4" style="background-color:lavenderblush;">
		<h4 class="page-header"> Tasks </h4>
		<div class='d-flex flex-column align-items-left notes-title'>
			<?php
				require "./includes/dbConnect.php";
				// selects random number of weekly and daily tasks 
				$result = mysqli_query($conn, "SELECT task_name, task_type FROM tasks ORDER BY RAND() LIMIT 3");
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						echo "<div class='d-flex'><label><input type='checkbox' class='option-input radio'><span class='label-text'>" . $row['task_name'].")</br></span></input></label></div>";
					}
				} else {
					echo "0 results";
				}
				echo "</div>"; 
				require "./includes/dbDisconnect.php";
			?>
			</div> <!-- End of Tasks Section -->
	</div>
  </div>
</div>
=======
require "dbConnect.php";

// selects three random daily tasks 
$result = mysqli_query($conn, "SELECT task_id, task_name FROM tasks WHERE task_type='daily' ORDER BY RAND() LIMIT 3");

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo  "ID: " . $row[task_id] . " - " . $row['task_name']."<br>";
  }
} else {
  echo "0 results";
}

require "dbDisconnect.php";

?> 
>>>>>>> a26523d5df00ef48e4e00d67dd0644180ea46531
