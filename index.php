<!-- Referenced: https://bbbootstrap.com/snippets/bootstrap-todo-list-custom-checkbox-button-ripple-effect-83884173 -->
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>repl.it</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css2?family=Barlow&display=swap" rel="stylesheet">
	<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
	<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'>

	</script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'>

	</script>
	<link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css'>
</head>

<body>
	<script src="script.js">

	</script>
	<div class="container">
		<div class="col-md-6">
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
        </ul>
    </div>
      <div class="task-section bg-white rounded info">Weekly
        <ul id="weekly" class="tasks">
          <li><label><input type="checkbox" class="taskItem option-input radio"><span class="label-text">Task 1</span></label></li>
          <li><label><input type="checkbox" class="taskItem option-input radio"><span class="label-text">Task 2</span></label></li>
        </ul>
      </div>
    </div>
  </div>
</html>