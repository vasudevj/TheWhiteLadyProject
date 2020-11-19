<?php 
	if(!empty($_GET['status'])){
		$status = $_GET['status'];
		echo '<script type="text/javascript">';
		echo 'alert("';
		echo ($status == 'sent') ? 'Your message was successfully sent.':'Your message was not sent. Try Again!';
		echo '");';
		echo '</script>';
	} 
?>  

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>The White Lady - 1000 flavors in one place</title>
	<link href="The_White_Lady_Project/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="The_White_Lady_Project/css/scrolling-nav.css" rel="stylesheet">
</head>

<body id="page-top">

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top">
				<img src="The_White_Lady_Project/images/logo.png" height="40" width="70" alt="Logo"> THE WHITE LADY</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#about">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#menu">Menu</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#gallery">Gallery</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#chefs">Chefs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
					</li>
					<li class="nav-item">
						<a class="btn btn-light" href="The_White_Lady_Project/booking.php">Book A Table</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Slideshow -->
	<header>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">

				<!-- Slide One -->
				<div class="carousel-item active" style="background-image: url('The_White_Lady_Project/images/large1.jpg')">
					<div class="carousel-caption d-none d-md-block">
					<h2 class="display-3">Welcome to The White Lady</h2>
					<p class="lead">Where food speaks with your palate</p>
					</div>
				</div>

				<!-- Slide Two -->
				<div class="carousel-item" style="background-image: url('The_White_Lady_Project/images/large2.jpg')">
					<div class="carousel-caption d-none d-md-block">
					<h2 class="display-4">Enjoy a gastronomic tour of India</h2>
					</div>
				</div>
				<!-- Slide Three -->
				<div class="carousel-item" style="background-image: url('The_White_Lady_Project/images/large3.jpg')">
					<div class="carousel-caption d-none d-md-block">
					<h2 class="display-4">One thousand flavors in one place.</h2>
					</div>
				</div>
			</div>
			
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</header>

	<!-- About Section -->
	<section id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mx-auto text-center">
					<h1 class="my-4">About</h1>
					<p class="lead">The White Lady represents Indian food in all its eccentricity and diversity along with a high quality family dining experience at down to earth prices. With a variety of dishes specially designed by Master Chef Vasudev Jayachandran during his travels across India, The White Lady provides a veritable gastronomic tour of India with destinations that showcase the quintessential dishes of each region, with exotic picks from the regions of Punjab and the Mughal Era. Some recipes like Shaam Savera (signature style spinach koftas filled with creamed cottage cheese and served floating on a velvety tomato butter gravy) and Puran Singh da Tariwala Murgh (chicken gravy – from a dhaba on the famous Delhi-Ambala Road) are classic Indian dishes given a contemporary twist.<br><br>At The White Lady, you can live an Indian food experience with a degree of exclusivity and a touch of simplicity that is as unique as the name. Food is cooked in the most hygienic atmosphere using the freshest of ingredients in a state-of- the-art kitchen fitted with the best of equipment using all the latest technologies. Highest standards in service is the hallmark of this chain.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Menu Section -->
	<section id="menu" class="bg-light">
		<div class="container">
			<div class="col-lg-12 mx-auto text-center">
				<h1 class="my-4">Menu</h1>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
					<div class="card h-100">
						<img class="card-img-top" src="The_White_Lady_Project/images/menu1.jpg" alt="">
						<div class="card-body">
							<h4 class="card-title">Chicken Triple<br>Fried Rice</h4>
							<p class="card-text">A Chinese delicacy reinvented the Indian way by the chefs here at The White Lady. It is sure to send your flavor meter to the absolute top.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
					<div class="card h-100">
						<img class="card-img-top" src="The_White_Lady_Project/images/menu2.jpg" alt="">
						<div class="card-body">
							<h4 class="card-title">Sindhi Biryani</h4>
							<p class="card-text">A spicy version of the world-famous Hyderabadi Biryani. Sindhi Biryani is one of the signature dishes in The White Lady.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
					<div class="card h-100">
						<img class="card-img-top" src="The_White_Lady_Project/images/menu3.jpg" alt="">
						<div class="card-body">
							<h4 class="card-title">Keema Bhare Karele</h4>
							<p class="card-text">Bitter gourds stuffed with spicy mutton mince, shallow fried and cooked in a delightful tomato gravy.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
					<div class="card h-100">
						<img class="card-img-top" src="The_White_Lady_Project/images/menu4.jpg" alt="">
						<div class="card-body">
							<h4 class="card-title">Sorse Ilish</h4>
							<p class="card-text">Traditional dish from the state of Bengal - the flavor of mustard infused with juicy fish meat is going to make you love this dish.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
					<div class="card h-100">
						<img class="card-img-top" src="The_White_Lady_Project/images/menu5.jpg" alt="">
						<div class="card-body">
							<h4 class="card-title">Paneer Butter Masala</h4>
							<p class="card-text">With a rich and creamy gravy, Paneer Butter Masala is a crowd favourite.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
					<div class="card h-100">
						<img class="card-img-top" src="The_White_Lady_Project/images/menu6.jpg" alt="">
						<div class="card-body">
							<h4 class="card-title">Achari Murgh</h4>
							<p class="card-text">A spicy chicken curry cooked with mango pickle and some special masalas.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
					<div class="card h-100">
						<img class="card-img-top" src="The_White_Lady_Project/images/menu7.jpg" alt="">
						<div class="card-body">
							<h4 class="card-title">Kulfi</h4>
							<p class="card-text">Kulfi is India's version of ice cream. We serve a variety of flavors including mango, pistachio, saffron, vanilla and rose.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
					<div class="card h-100">
						<img class="card-img-top" src="The_White_Lady_Project/images/menu8.jpg" alt="">
						<div class="card-body">
							<h4 class="card-title">Mysore Pak</h4>
							<p class="card-text">This soft, buttery fudge dessert is said to have been invented in the kitchen of royal Mysore Palace and is popularly served at festivals.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Gallery Section -->
	<section id="gallery">
		<div class="container">
			<div class="col-lg-12 mx-auto text-center">
				<h1 class="my-4">Gallery</h1>
			</div>

			<div class="row text-center text-lg-left">
				<div class="col-lg-4 col-md-4 col-6">
					<img class="img-fluid img-thumbnail" src="The_White_Lady_Project/images/gallery1.jpg" alt="">
				</div>
				<div class="col-lg-4 col-md-4 col-6">
					<img class="img-fluid img-thumbnail" src="The_White_Lady_Project/images/gallery2.jpg" alt="">
				</div>
				<div class="col-lg-4 col-md-4 col-6">
					<img class="img-fluid img-thumbnail" src="The_White_Lady_Project/images/gallery3.jpg" alt="">
				</div>
				<div class="col-lg-4 col-md-4 col-6">
					<img class="img-fluid img-thumbnail" src="The_White_Lady_Project/images/gallery4.jpg" alt="">
				</div>
				<div class="col-lg-4 col-md-4 col-6">
					<img class="img-fluid img-thumbnail" src="The_White_Lady_Project/images/gallery5.jpg" alt="">
				</div>
				<div class="col-lg-4 col-md-4 col-6">
					<img class="img-fluid img-thumbnail" src="The_White_Lady_Project/images/gallery8.jpg" alt="">
				</div>
			</div>
		</div>
	</section>

	<!-- Chefs Section -->
	<section id="chefs" class="bg-light">
		<div class="container">
			<div class="col-lg-12 mx-auto text-center">
				<h1 class="my-4">Chefs</h1>
			</div>

			<div class="row">

				<div class="col-xl-3 col-md-6 mb-4">
					<div class="card border-0 shadow">
						<img src="The_White_Lady_Project/images/chef2.jpg" class="card-img-top" alt="...">
						<div class="card-body text-center">
							<h5 class="card-title mb-0">Rima Rajendran</h5>
							<div class="card-text text-black-50">Executive Chef</div>
						</div>
					</div>
				</div>

				<div class="col-xl-3 col-md-6 mb-4">
					<div class="card border-0 shadow">
						<img src="The_White_Lady_Project/images/chef1.jpg" class="card-img-top" alt="...">
						<div class="card-body text-center">
							<h5 class="card-title mb-0">Vasudev Jayachandran</h5>
							<div class="card-text text-black-50">Chef de Cuisine</div>
						</div>
					</div>
				</div>

				<div class="col-xl-3 col-md-6 mb-4">
					<div class="card border-0 shadow">
						<img src="The_White_Lady_Project/images/chef3.jpg" class="card-img-top" alt="...">
						<div class="card-body text-center">
							<h5 class="card-title mb-0">Achuth Suresh</h5>
							<div class="card-text text-black-50">Sous Chef</div>
						</div>
					</div>
				</div>

				<div class="col-xl-3 col-md-6 mb-4">
					<div class="card border-0 shadow">
						<img src="The_White_Lady_Project/images/chef4.jpg" class="card-img-top" alt="...">
						<div class="card-body text-center">
							<h5 class="card-title mb-0">Udai Girish</h5>
							<div class="card-text text-black-50">Pastry Chef</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Contact Us Section -->
	<section id="contact">
		<div class="container">
			<div class="col-lg-12 mx-auto text-center">
				<h1 class="my-4">Contact Us</h1>
			</div>

			<div class="row">

				<div class="col-lg-4 mx-auto">
					<h4>Timings</h4>
					<p class="lead">We're open from 12:00 PM to 12:00 AM everyday</p>
					<h4>Locate Us</h4>
					<p class="lead">Fort Aquada Road, Candolim, Goa 403515, India</p>
					<h4>Phone</h4>
					<p class="lead">123-456-7890</p>
				</div>

				<div class="col-lg-6 mx-auto">
					<form method="POST" action="The_White_Lady_Project/contact.php">

						<label>Name</label>
						<input type="text" id="name" name="name" placeholder="Your name...">

						<label>E-mail</label>
						<input type="email" id="email" name="email" placeholder="Your email id...">

						<br>

						<label>Message</label>
						<textarea id="message" name="message" placeholder="Write something..." style="height:100px"></textarea>

						<input type="submit" value="Submit" name="contactus">
					</form>
				</div>

			</div>
		</div>
	</section>

	<!-- Footer -->
	<footer class="py-5 bg-dark">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; Vasudev Jayachandran (Roll 61) and Rima Rajendran (Roll 48)</p>
		</div>
	</footer>

	<!-- Javascript -->
	<script src="The_White_Lady_Project/vendor/jquery/jquery.min.js"></script>
	<script src="The_White_Lady_Project/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="The_White_Lady_Project/vendor/jquery-easing/jquery.easing.min.js"></script>
	<script src="The_White_Lady_Project/js/scrolling-nav.js"></script>

</body>
</html>