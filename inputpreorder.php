<?php 
$email = $_POST['email'];
$nama = $_POST['nama'];
$namaBahan = $_POST['namaBahan'];
$namaJasa = $_POST['namaJasa'];
$jumlahBaju = $_POST['jumlahbaju'];
$harga = $_POST['harga'];


if (isset($_POST['submit'])) {
		$connection = mysql_connect("localhost", "root", "");
		// mencegah MySQL injection
		$email = stripcslashes($email);
		$nama = stripcslashes($nama);
		$namaBahan = stripcslashes($namaBahan);
		$namaJasa = stripcslashes($namaJasa);
		$jumlahBaju = stripcslashes($jumlahBaju);
		$harga = stripcslashes($harga);

		$email = mysql_real_escape_string($email);
		$nama = mysql_real_escape_string($nama);
		$namaBahan = mysql_real_escape_string($namaBahan);
		$namaJasa = mysql_real_escape_string($namaJasa);
		$jumlahBaju = mysql_real_escape_string($jumlahBaju);
		$harga = mysql_real_escape_string($harga);

		$db = mysql_select_db("impal", $connection);
		$sql = "insert into `preorder`(`email`, `nama`, `namaBahan`, `namaJasa`, `jumlahBaju`, `totalHarga` ) VALUES ('$email','$nama','$namaBahan', '$namaJasa', '$jumlahBaju', '$harga')";
		$query = mysql_query($sql);
		if ($query){
			echo '<div class="alert alert-success">
 					<strong>Success!</strong> Kembali <a href="preorder.php" class="alert-link">Pre-Order</a>.
				</div>';
		}
		else
		{
			echo '<div class="alert alert-info">
 					<strong>Ooops!</strong> Kembali <a href="preorder.php" class="alert-link">Pre-Order</a>.
				</div>';
		}
		//$rows = mysql_num_rows($query);
			
}
	# code...
?>