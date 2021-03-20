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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
	 crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
	 crossorigin="anonymous">

	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
	 crossorigin="anonymous">

	</script>
</head>

<body>

	<nav class="navbar navbar-expand-md navbar-dark bg-main-green fixed-top">
		<a class="navbar-brand " href="#">GREEN</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent"
		  <ul class="navbar-nav ml-auto">
			  <li class="nav-item">
				  <a class="nav-link" href="#">Events</a>
			  </li>
			  <li class="nav-item">
				  <a class="nav-link" href="#">Articles</a>
			  </li>
			  <li class="nav-item">
				  <a class="nav-link" href="#">Locator</a>
			  </li>
			  <li class="nav-item">
				  <a class="nav-link" href="#">Rewards</a>
			  </li>
			  <li class="nav-item">
				  <a class="nav-link" href="#">Social</a>
			  </li>
			  <li class="nav-item dropdown">
				  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">Account</a>
				  <div class="dropdown-menu" aria-labelledby="navbarDropdownOrder">
					  <a class="dropdown-item" href="#">Login</a>
						<a class="dropdown-item" href="#">Register</a>
          </div>
			  </li>
		  </ul>
    </div>
	</nav>

	<div class="main-container">
    <div class="row">
      <div class="col-md-8">
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
            </div>
            
            </div>
            <!-- End of Carousel Content -->
          </div>
          <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            <!-- End of Carousel -->
        </div>
        <!-- End of Column 1 -->
      </div>
      <div class="col-md-4">
        <div class="d-flex flex-row align-items-center notes-title">
            <h4>Tasks</h4>
        </div>
        <div class="d-flex"> <label><input type="checkbox" class="option-input radio"><span class="label-text">Task 1</span></label></div>
        <div class="d-flex "> <label><input type="checkbox" class="option-input radio"><span class="label-text">Task 2</span></label></div>
        <div class="d-flex"> <label><input type="checkbox" class="option-input radio"><span class="label-text">Task 3</span></label></div>
      <!-- End of Row 1 -->
    </div>
    <!-- End of Container -->
  </div>

</body>
</html>