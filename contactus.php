

<?php
  include_once "./includes/header.php";
  
  // Sources:
  // https://mdbootstrap.com/docs/b4/jquery/sections/contact/
?>
  
<!-- Section: Contact v.1 -->
<section class="my-5">
  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-3 page-header">Contact us</h2>
  <!-- Section description -->
  <p class="text-center w-responsive mx-auto">If you have any questions or feedback, please let us know. <br> We'd love to help out in any way we can!</p>
  <!-- Grid row -->
  <div class="container justify-content-center">
    <div class="row justify-content-center">
      <div class="form-group col-md-4 col-md-offset-5 align-center ">
        <!-- Form with header -->
        <form onsubmit="handleNextPage(event, 1)" method="POST">
          <div class="form-group">
            <label for="firstName">First Name</label>
            <input id="firstName" name="firstName" type="text" class="form-control" placeholder="John" minlength="1" maxlength="50" required>
          </div>
          <div class="form-group">
            <label for="lastName">Last Name</label>
            <input id="lastName" name="lastName" type="text" class="form-control" placeholder="Doe" minlength="1" maxlength="50" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input id="email" name="email" type="email" class="form-control" placeholder="johndoe@example.com" required>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <input id="message" name="message" type="text" class="form-control" minlength="1" maxlength="200" placeholder="any questions or feedback" required>
          </div>
          <div class="form-group text-center">
            <button type="submit" class="btn btn-block btn-site-main">Submit</button>
          </div>
        </form>
      </div>
    </div>
</section>
<!-- Section: Contact v.1 -->
</div>
</body>
</html>

