<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Book a Table - The White Lady</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/booking-page" rel="stylesheet">

</head>

<body>
<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="../index.php"><img src="images/logo.png" height="40" width="70" alt="Logo"> THE WHITE LADY</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="../index.php">Go back to Homepage</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

<br>
<br>
<br>
<br>

<section>
<div class="container">
        <div class="row">
	        <div class="col-lg-4 mx-auto">
	    	<img src="images/sideimg.jpg" width="400" height="600">
    	</div>
    	<div class="col-lg-6 mx-auto">
          	<h3 class="login-heading mb-4">Book a Table</h3>
              <form method="post" action="process.php">
                <div class="form-group">
                  <input class="form-control" type="text" name="fname" placeholder="First name">
                </div>

                <div class="form-group">
                  <input class="form-control" type="text" name="lname" placeholder="Last name">
                </div>

                <div class="form-group">
                  <input class="form-control" type="email" name="email" placeholder="Email address">
                </div>

                <div class="form-group">
                  <input class="form-control" type="text" name="phone" placeholder="Phone number">
                </div>

                <div class="form-group">
					<label>Table For
					<select class="form-control" name="seats" id="seats">
						<option value="2">2</option>
						<option value="4">4</option>
						<option value="6">6</option>		
						<option value="8">8+</option>
					</select>
					</label>
				</div>

				<div class="form-label-group">
					<label>Event
					<select class="form-control" name="event" id="event">
						<option value="Casual">Casual</option>
						<option value="Meeting">Meeting</option>
						<option value="Celebration">Celebration</option>
					</select>
					</label>
				</div>

					<div class="form-label-group">
						<label>Date <input class="form-control" type="date" name="bdate"></label>
					</div>

					<div class="form-check form-check-inline">
					<label>Meal Type <br>	 					
						<label class="form-check-label" ><input class="form-check-input" type="radio" name="meal" value="lunch" checked> Lunch </label>
						<label class="form-check-label" ><input class="form-check-input" type="radio" name="meal" value="tea"> Tea </label>
						<label class="form-check-label" ><input class="form-check-input" type="radio" name="meal" value="dinner"> Dinner </label>
					</label>
					</div>
					<br>
                	<button class="btn btn-lg btn-primary" type="submit" name="save" value="Submit">Book</button>
              </form>
			</div>
		</div>
	</div>
</section>

<br><br>

 <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Vasudev Jayachandran (Roll 61) and Rima Rajendran (Roll 48)</p>
    </div>
  </footer>

	<script src="vendor/jquery/jquery.min.js"></script>
 	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  	<script src="js/scrolling-nav.js"></script>

</body>
</html>