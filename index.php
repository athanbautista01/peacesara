<?php
	/*//Connect to MySQL
	require_once("database/connect.php");*/
	//include the header
	$title="Peacesara | Homepage";
	include("include/header.php");
?>
<br>
<div class="col-lg-12">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/fifth.jpg" alt="...">
    </div>
    <div class="item">
      <img src="img/second.jpg" alt="...">
    </div>
    <div class="item">
      <img src="img/third.jpg" alt="...">
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
	include("include/footer.php");
?>