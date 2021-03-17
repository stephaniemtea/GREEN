   <h4 class="page-section">Tasks</h4>
   <div class="task-section bg-white rounded info">Daily
    <ul id="daily" class="tasks">
    <?php
      require "./includes/dbConnect.php";
      $result = mysqli_query($conn, "SELECT task_name FROM `tasks` WHERE task_type = daily");
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<li><label><input type="checkbox" class="taskItem option-input radio"><span class="label-text">'. $row['task_name']. '</span></label></li>';
        }
      } else {
          echo "0 results";
        }
        require "./includes/dbDisconnect.php";
      ?>