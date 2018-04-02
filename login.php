<?php 
session_start();
if (isset($_POST['submit'])) {
$error='';
	if (empty($_POST['username']) || empty($_POST['password'])) { $error = "username atau password salah";
	header('location: index.php');
		# code...
	} else {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$connection = mysql_connect("localhost", "root", "");
		// mencegah MySQL injection
		$username = stripcslashes($username);
		$password = stripcslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);

		$db = mysql_select_db("impal", $connection);

		$query = mysql_query("select * from petugas where password='$password' and username='$username'", $connection);
		$rows = mysql_num_rows($query);
			if ($rows == 1){
				$_SESSION['login_user'] = $username;
				header("Location: inputharga.php");
			} else {
				$error = "Username atau Password belum terdaftar";
				echo $error;
			}
				mysql_close($connection);	

	}
	
}
?>