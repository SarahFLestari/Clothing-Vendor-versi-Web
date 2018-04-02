<?php

if(isset($_SESSION['login_user'])){
	header("location: inputharga.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title> LOGIN </title>
		<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<script type="js/jquery-3.2.1.min.js"></script>
		<script type="css/bootstrap/js/bootstrap.js"></script>
	</head>
	<body>
	<nav class="row container-fluid">
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <ul class="nav navbar-nav">
		      <li><a href="preorder.php">Pre-Order</a></li>
		      <li><a href="#">Tentang Kami</a></li>
		      <li><a href="#">Kontak</a></li>
		    </ul>
		  </div>
		</nav>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		    <div class="item active">
		      <img src=img/baju2.png alt="Clothing" class="img-responsive">
		      	<div class="carousel-caption">
        			<h3>Clothes Vendor</h3>
        			<p>Buat baju sendiri lebih rame!</p>
      			</div>
		    </div>
		    <div class="item">
		      <img src=img/baju3.png alt="Clothing">
		    </div>
		    <div class="item">
		      <img src=img/baju4.png alt="Clothing">
		    </div>
		  </div>
		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		<div class="row persegipanjang">
			<p> Login </p>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-offset-4 kotakan">
				<form action="login.php" method="POST">
					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" placeholder="Masukkan Username" name="username" id="username">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="Password" class="form-control" placeholder="Masukkan password" name="password" id="password">
					</div>
					<div>
						<button type="submit" id="submit" name="submit" class="btn btn-info">Kirim</button>
					</div>
				</form>
			</div>
		</div>
	</nav>
	<script>
	// Activate Carousel
$("#myCarousel").carousel();

// Enable Carousel Indicators
$(".item").click(function(){
    $("#myCarousel").carousel(1);
});

// Enable Carousel Controls
$(".left").click(function(){
    $("#myCarousel").carousel("prev");
});
</script>
	</body>
</html>