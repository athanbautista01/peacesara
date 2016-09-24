<?php
	/*//Connect to MySQL
	require_once("database/connect.php");*/
	//include the header
	$title="Pet Lane";
	include("include/header.php");
?>

<div id="mycarousel" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#mycarousel" data-slide-to="0"></li>
								<li data-target="#mycarousel" data-slide-to="1"></li>
								<li data-target="#mycarousel" data-slide-to="2"></li>
								<li data-target="#mycarousel" data-slide-to="3"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
								<div class="item">
									<img src="images/2.jpg" height= "100%" data-color="lightblue" alt="First Image">
									<div class="carousel-caption">
										<h1>Trends</h1>
										<a href="#"><h3 class="car">Explore</h3></a>
									</div>
								</div>
								<div class="item">
									<img src="images/1.jpg" height="100%" width="100%" data-color="firebrick" alt="Second Image">
									<div class="carousel-caption">
										<h1>Promo</h1>
										<a href="#"><h3 class="car">Shop Now</h3></a>
									</div>
								</div>
								<div class="item">
									<img src="images/3.jpg" data-color="violet" alt="Third Image">
									<div class="carousel-caption">
										<h1>String Bags</h1>
										<a href="#"><h3 class="car">View Now</h3></a>
									</div>
								</div>
								<div class="item">
									<img src="images/4.jpg" data-color="lightgreen" alt="Fourth Image">
									<div class="carousel-caption">
										<h1>Vits</h1>
										<a href="#"><h3 class="car">Find Your Choice</h3></a>
									</div>
								</div>
							</div>
						</div>
<div class="col-lg-6">
	<hr>
	<a class="btn btn-default" href="#" role="button">Start Discussion</a>
	<hr>
	<h2>Ongoing Discussions</h2>
	<div class="divy"><h3><a href="#">War and Peace: "Sometimes violence is needed to bring peace.” Do you agree with this?</a></h3></div>
	<div class="divy"><h3><a href="#">War and Peace: "Sometimes violence is needed to bring peace.” Do you agree with this?</a></h3></div>
	<div class="divy"><h3><a href="#">War and Peace: "Sometimes violence is needed to bring peace.” Do you agree with this?</a></h3></div>
	<hr>
</div>

<div class="col-lg-6">
	<hr>
	<a class="btn btn-default" href="#" role="button">Events</a>
	<hr>
</div>
</div>

<?php
    //include the footer
	$title="Pet Lane";
	include("include/footer.php");
?>