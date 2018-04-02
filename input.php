<?php 
session_start();
$idbahan = $_POST['idbahan'];
$namabahan = $_POST['namabahan'];
$hargabahan = $_POST['hargabahan'];


if (isset($_POST['submit'])) {
		$connection = mysql_connect("localhost", "root", "");
		// mencegah MySQL injection
		$idbahan = stripcslashes($idbahan);
		$namabahan = stripcslashes($namabahan);
		$hargabahan = stripcslashes($hargabahan);
		$idbahan = mysql_real_escape_string($idbahan);
		$namabahan = mysql_real_escape_string($namabahan);
		$hargabahan = mysql_real_escape_string($hargabahan);

		$db = mysql_select_db("impal", $connection);
		$sql = "insert into `daftarBahan`(`idBahan`, `namaBahan`, `harga`) VALUES ('$idbahan','$namabahan','$hargabahan')";
		$query = mysql_query($sql);
		if ($query){
			echo '<div class="alert alert-success">
 					<strong>Success!</strong> Kembali <a href="inputharga.php" class="alert-link">input</a>.
				</div>';
		}
		else
		{
			echo '<div class="alert alert-info">
 					<strong>Ooops!</strong> Kembali <a href="inputharga.php" class="alert-link">input</a>.
				</div>';
		}
		//$rows = mysql_num_rows($query);
			
}
	# code...
?>