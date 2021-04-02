

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
        <form>
        <div class="form-group">
        <label for="icebreaker">How long was your shower yesterday night or this morning?</label>
        <input type="number" min="1" class="form-control" id="icebreaker">
      </div>
      </form>
    </div>
    <!-- End of Column -->
  </div>
  <!-- End of Row 2 -->
</div>
<!-- End of Container -->
</body>
</html>

