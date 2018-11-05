<?php 
// setting timezone 
date_default_timezone_set('Asia/Jakarta');

// mulai session
session_start();

include_once 'conn.php';


// koneksi
// $host = "localhost";
// $user = "root";
// $pass = "";
// $db = "db_rumahsakit";

$koneksi = mysqli_connect($koneksi1['host'], $koneksi1['user'], $koneksi1['pass'], $koneksi1['db']);
if(mysqli_connect_errno()){
	echo mysqli_connect_error();
}
// else{
// 	echo " successful conecction";
// }

// format tanggal
function tgl_indo($tgl){
	$tanggal = substr($tgl, 8, 2);
	$bulan = substr($tgl, 5, 2);
	$tahun = substr($tgl, 0, 4);

	return $tanggal. "/" . $bulan . "/" . $tahun;
}
?>