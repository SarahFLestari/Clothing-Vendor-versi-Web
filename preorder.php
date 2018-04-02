<!DOCTYPE html>
<html>
<head>
		<title>PreOrder</title>
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
		      <li class="active"><a href="#">Pre-Order</a></li>
		      <li><a href="#">Tentang Kami</a></li>
		      <li><a href="#">Kontak</a></li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
      			<li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login Sebagai Admin</a></li>
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
			<p> Pre-Order </p>
		</div>
	</nav>
	<div class="row col-lg-4 col-md-offset-4 kotakan">
<!-- nginputt ke SQL -->
				<form action="inputpreorder.php" method="POST">
					<div class="form-group">
						<label>Email</label>
						<input type="text" class="form-control" placeholder="Masukkan Email" required="true" name="email" id="email">
					</div>
					<div class="form-group">
					<label>Nama</label>
						<input type="text" class="form-control" placeholder="Masukkan Nama Anda" required="true" name="nama" id="nama">
					</div>
					<div class="form-group">
						<label>Jenis Jasa</label>
						<?php mysql_connect("localhost","root","");
						mysql_select_db("impal");

						$sql = "SELECT namaJasa FROM daftarJasa";
						$result = mysql_query($sql);

						echo "<select name = 'namaJasa' onChange='cekTarif()' class='form-control' id='jasa'>";
						while ($row = mysql_fetch_array($result)){
							echo "<option value='" . $row['namaJasa'] ."'>". $row['namaJasa'] . "</option>";
						}
						echo "</select>";

						  ?>
					</div>
					<div class="form-group">
						<label>Jenis Bahan</label>
						<?php mysql_connect("localhost","root","");
						mysql_select_db("impal");

						$sql = "SELECT namaBahan FROM daftarBahan";
						$result = mysql_query($sql);

						echo "<select name = 'namaBahan' onChange='cekTarif()' class='form-control' id='bahan'>";
						while ($row = mysql_fetch_array($result)){
							echo "<option value='" . $row['namaBahan'] ."'>". $row['namaBahan'] . "</option>";
						}
						echo "</select>";

						  ?>
					</div>
					<div class="form-group">
						<label>Jumlah Baju</label>
						<input type="numberDecimal" min="0" step="1" class="form-control" placeholder="Masukkan Jumlah Baju" required="true" name="jumlahbaju" id="jumlahbaju" onChange="cekTarif()" value="1">
					</div>
					<div class="form-group">
						<label>Total Harga</label>
						<input type="text" class="form-control" readonly required="true" id="harga" name="harga">
					</div>
					<div>
						<button type="submit" id="submit" name="submit" class="btn btn-info">Proses</button>
				</div>
				<div>
						
				</div>
			</form>
		</div>
	</div>

<script>
function cekTarif() {
        var jasa = document.getElementById("jasa").value;
        var bahan = document.getElementById("bahan").value;
        var jumlah = document.getElementById("jumlahbaju").value;
        // document.getElementById("harga").value = "getharga.php?bahan="+bahan+"&jasa="+jasa;
    
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("harga").value = "Rp "+this.responseText+",00";
            }
        };
        xmlhttp.open("GET","getharga.php?bahan="+bahan+"&jasa="+jasa+"&jumlah="+jumlah,true);
        xmlhttp.send();
    
        
}
</script>
<!-- heupp didieu wae -->

	</body>

<!-- note:
sarahcantik : yg carousel gajadi-jadi sedih gaa -->
