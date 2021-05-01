

<?php
  include_once "./includes/header.php";
  
  // Sources:
  // http://codersblock.com/blog/checkbox-trickery-with-css/ 
  
 ?>
  
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
      </div>
      <!-- End of Column 2 -->
    </div>
    <!-- End of Row 1 -->
    <div class="row">
      <div class="col-md-6 icebreaker>
		<?php 
			require "./includes/dbConnect.php";
				echo "<form method='post' action='<?php echo $_SERVER['PHP_SELF'];?>'>
					<label for='icebreaker'>";
					$result = mysqli_query($conn, "SELECT icebreaker_name FROM `icebreakers` WHERE icebreaker_id = 1");
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
							echo "<label for='icebreaker'>" . $row['icebreaker_name'];
						}
					} else {
						echo "0 results";
					}
			require "./includes/dbDisconnect.php";

			echo "</label>
				<input type='number' name='slength' min='1' class='form-control'>
				<input type='submit' name='submit' value='submit'>
				</form>";
	
			if (isset($_POST['submit']) or $_SERVER["REQUEST_METHOD"] == "POST") {	
			// collect value of input field
			$i_answer = $_POST['slength'];
	
				if (empty($i_answer)) {
					echo "Sorry, please enter a number";
				} else {
					if ($i_answer <= 5) {
						echo "Wow, you showered in " . $i_answer . " minutes? Keep up the good work!";
					} else if ($i_answer >5 and $i_answer<10) {
						echo "You showered in " . $i_answer . " minutes. That's not bad, but can you do better?";
					} else {
						echo "Did you take a " . $i_answer . " minute shower? Maybe try and take a shorter one next time!";
					}
				}
			}

		?>
    <!-- End of Column -->
  </div>
  <!-- End of Row 2 -->
</div>
<!-- End of Container -->
</body>
</html>

