<?php 
session_start();
$idjasa = $_POST['idjasa'];
$namajasa = $_POST['namajasa'];
$tarif = $_POST['tarif'];


if (isset($_POST['kirim'])) {
		$connection = mysql_connect("localhost", "root", "");
		// mencegah MySQL injection
		$idjasa = stripcslashes($idjasa);
		$namajasa = stripcslashes($namajasa);
		$tarif = stripcslashes($tarif);
		$idjasa = mysql_real_escape_string($idjasa);
		$namajasa = mysql_real_escape_string($namajasa);
		$tarif = mysql_real_escape_string($tarif);

		$db = mysql_select_db("impal", $connection);
		$sql = "insert into `daftarJasa`(`idJasa`, `namaJasa`, `tarif`) VALUES ('$idjasa','$namajasa','$tarif')";
		$query = mysql_query($sql);
		if ($query){
			echo '<div class="alert alert-success">
 					<strong>Success!</strong> Kembali <a href="inputtarif.php" class="alert-link">input</a>.
				</div>';
		}
		else
		{
			echo '<div class="alert alert-info">
 					<strong>Ooops!</strong> Kembali <a href="inputharga.php" class="alert-link">input</a>.
				</div>';
		}
		
			
}
	# code...
	
?>