<?php 
mysql_connect("localhost","root","");
mysql_select_db("impal");

//$abc = intval($_GET)
$namaBahan = $_GET["bahan"];
$namaJasa = $_GET["jasa"];
$jumlah = $_GET['jumlah'];
$hargaBahan = 0;
$hargaJasa = 0;

$sql = "SELECT harga FROM daftarBahan WHERE namaBahan = '$namaBahan'";
$result = mysql_query($sql);
if (mysql_num_rows($result) > 0){
	$fetch = mysql_fetch_array($result);
	$hargaBahan = $fetch['harga'];
}

$sql = "SELECT tarif FROM daftarJasa WHERE namaJasa = '$namaJasa'";
$result = mysql_query($sql);
if (mysql_num_rows($result) > 0){
	$fetch = mysql_fetch_array($result);
	$hargaJasa = $fetch['tarif'];
}

echo (intval($hargaBahan)+intval($hargaJasa))*intval($jumlah);//*intval($jumlah);