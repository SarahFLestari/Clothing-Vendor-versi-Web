<?php 
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("impal", $connection);
session_start();

$user_check=$_SESSION['login_user'];
$ses_sql = mysql_query("select id_petugas from petugas where username = '$user_check'", $connection);
	$row = mysql_fetch_assoc($ses_sql);
	$login_session =$row['id_petugas'];
	if(!isset($login_session)){
		mysql_close($connection);
		header('Location: index.php');
	}
?>