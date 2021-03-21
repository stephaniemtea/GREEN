 <?php

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
